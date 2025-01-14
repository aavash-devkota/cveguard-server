<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectClient;
use Illuminate\Http\Request;

class ProjectClientController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'project_uuid' => ['required', 'exists:projects,uuid'],
            'client_id' => ['required'],
            'os' => ['required'],
            'hostname' => ['required'],
        ]);

        $project = Project::where('uuid', $inputs['project_uuid'])->first();
        $prev_client_connection = $project->clients()->where('client_id', $inputs['client_id'])->first();
        if ($prev_client_connection != null) {
            return response()->json(['message' => 'Client was already added to the project!', 'project_name' => $project->name]);
        }

        $project->clients()->create(['client_id' => $inputs['client_id'], 'os' => $inputs['os'], 'hostname' => $inputs['hostname']]);

        return response()->json(['message' => 'Client added to the project successfully!', 'project_name' => $project->name], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $project_client)
    {
        $inputs = $request->validate([
            'project_uuid' => ['required'],
        ]);

        $project_client = ProjectClient::where('client_id', $project_client)->where('project_uuid', $inputs['project_uuid'])->first();
        if ($project_client == null) {
            return response()->json(['message' => 'Client does not exist'], 404);
        }
        $project_client->delete();

        return response()->json(['message' => 'Client has been removed']);
    }
}
