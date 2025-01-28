<?php

namespace App\Http\Controllers;

use App\Enums\Severity;
use App\Models\Project;
use App\Models\Scan;

class ProjectScanController extends Controller
{
    public function show(Project $project, Scan $scan)
    {
        $scan->load('vulnerabilities', 'vulnerabilities.package', 'packages', 'project_client');

        $packages_severity_count = [
            Severity::NOT_AFFECTED->value => 0,
            Severity::LOW->value => 0,
            Severity::MODERATE->value => 0,
            Severity::HIGH->value => 0,
            Severity::CRITICAL->value => 0,
        ];

        $packages_version = $scan->packages->pluck('pivot.package_version', 'name');
        $total_packages_count = $packages_version->count();
        $packages_vulnerable = $scan->vulnerabilities->sortByDesc('severity')->groupBy('package_id')->groupBy('severity')->toArray();
        if (array_key_exists('', $packages_vulnerable)) {
            $packages_vulnerable = $packages_vulnerable[''];
        }
        foreach ($packages_vulnerable as $package_vulnerabilities) {
            $packages_severity_count[$package_vulnerabilities[0]['severity']]++;
        }
        $total_affected_count = $packages_severity_count[1] + $packages_severity_count[2] + $packages_severity_count[3] + $packages_severity_count[4];
        $packages_severity_count[0] = $total_packages_count - $total_affected_count;

        return view('dashboard.projects.scans.show', compact('project', 'scan', 'packages_vulnerable', 'packages_version', 'packages_severity_count', 'total_packages_count', 'total_affected_count'));
    }
}
