<?php

namespace App\Http\Controllers;

use App\Enums\Severity;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_projects = Auth::user()->projects;

        return view('dashboard.projects.index', compact('user_projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'name' => ['required'],
            'logo' => ['required', File::image()],
            'ecosystem' => ['required'],
            'description' => ['required'],
        ]);

        $new_project = Auth::user()->projects()->create([
            ...$inputs,
            'uuid' => Str::uuid(),
        ]);
        $new_project->addMedia($inputs['logo'])->toMediaCollection('logo');

        return redirect(route('dashboard.projects.show', [$new_project->uuid]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $is_atleast_one_client_connected = $project->clients->count() > 0;
        $has_atleast_one_scan = $project->scans->count() > 0;

        $packages_severity_count = [
            Severity::NOT_AFFECTED->value => 0,
            Severity::LOW->value => 0,
            Severity::MODERATE->value => 0,
            Severity::HIGH->value => 0,
            Severity::CRITICAL->value => 0,
        ];
        $total_packages_count = 0;
        $total_affected_count = 0;
        $packages_vulnerable = [];
        $packages_version = [];
        $scans = [];

        if ($has_atleast_one_scan) {
            $project->load('scans', 'scans.vulnerabilities', 'scans.vulnerabilities.package', 'scans.packages', 'scans.project_client');

            $scans = $project->scans;
            $latest_scan = $scans->last();
            $packages_version = $latest_scan->packages->pluck('pivot.package_version', 'name');
            $total_packages_count = $packages_version->count();
            $packages_vulnerable = $latest_scan->vulnerabilities->sortByDesc('severity')->groupBy('package_id')->groupBy('severity')->toArray()[''];
            foreach ($packages_vulnerable as $package_vulnerabilities) {
                $packages_severity_count[$package_vulnerabilities[0]['severity']]++;
            }
            $total_affected_count = $packages_severity_count[1] + $packages_severity_count[2] + $packages_severity_count[3] + $packages_severity_count[4];
            $packages_severity_count[0] = $total_packages_count - $total_affected_count;
        }

        return view('dashboard.projects.show', compact('project', 'is_atleast_one_client_connected', 'has_atleast_one_scan', 'packages_severity_count', 'total_packages_count', 'total_affected_count', 'packages_version', 'packages_vulnerable', 'scans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
