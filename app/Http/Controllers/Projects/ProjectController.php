<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\ProjectStoreRequest;
use App\Models\Project\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['floors.units'])->get();
        if ($projects->isEmpty())
            return response()->json(
                [
                    'message' => 'No projects found.'
                ], 404);
        return response()->json(
            [
                'message' => 'Projects retrieved successfully',
                'data' => $projects
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(ProjectStoreRequest $request)
    {
        $project = Project::create($request->all());
        return response()->json(
            [
                'message' => 'Project created successfully.',
                'data' => $project
            ]);
    }

    public function show($id)
    {
        $project = Project::with(['floors.units'])->find($id);
        if (!$project)
            return response()->json(
                [
                    'message' => 'No project found with the provided id.'
                ], 404);
        return response()->json(
            [
                'message' => 'Project retrieved successfully',
                'data' => $project
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        if (!$project)
            return response()->json(
                [
                    'message' => 'No project found with the provided id.',
                ], 404);
        $project->update($request->all());
        return response()->json(
            [
                'message' => 'Project Updated successfully',
                'data' => $project
            ]
        );
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        if (!$project)
            return response()->json(
                [
                    'message' => 'No project found with the provided id.'
                ], 404);
        $project->delete();
        return response()->json(
            [
                'message' => 'Project deleted successfully',
                'data' => $project
            ]
        );
    }
}
