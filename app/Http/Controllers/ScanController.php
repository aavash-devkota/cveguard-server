<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Project;
use App\Models\ProjectClient;
use Composer\Semver\Comparator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ScanController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'project_uuid' => ['required', 'exists:projects,uuid'],
            'client_id' => ['required', 'exists:project_clients'],
            'dependencies' => ['required', 'array'],
        ]);

        $project = Project::where('uuid', $inputs['project_uuid'])->first();
        $client = ProjectClient::where('client_id', $inputs['client_id'])->first();
        $project_uuid = $project->uuid;
        $newly_added_scan = $project->scans()->create(['project_client_id' => $client->id]);
        $newly_added_scan_id = $newly_added_scan->id;

        // Loop through each dependency

        foreach ($request->dependencies as $dependency) {
            $package_info = $this->get_package_name_and_version($dependency['name']);
            $package = Package::firstOrCreate(['name' => $package_info[0], 'ecosystem' => 'npm']);
            $package_version = $package_info[1];
            $newly_added_scan->packages()->attach($package->id, [
                'package_version' => $package_version,
            ]);

            // Check if there is any vulnerability for the current package and version
            $all_package_vulnerabilities = $package->vulnerabilities;
            foreach ($all_package_vulnerabilities as $vulnerability) {
                $introduced_version = $vulnerability->introduced_version;
                $fixed_version = $vulnerability->fixed_version;
                if (Comparator::greaterThanOrEqualTo($package_version, $introduced_version) && Comparator::lessThan($package_version, $fixed_version)) {
                    $newly_added_scan->vulnerabilities()->attach($vulnerability->id);
                }
            }
        }

        return response()->json(['scan_url' => URL::to("/dashboard/projects/$project_uuid/scans/$newly_added_scan_id")], 201);
    }

    private function get_package_name_and_version(string $input): array
    {
        $pos = strrpos($input, '@@');

        return [substr($input, 0, $pos), substr($input, $pos + 2)];
    }
}
