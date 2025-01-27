<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Scan;

class ProjectScanController extends Controller
{
    public function show(Project $project, Scan $scan)
    {
        return $scan;
    }
}
