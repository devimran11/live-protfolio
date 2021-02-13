<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('backend.project.view-project', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.project.add-project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'icons' =>'required',
            'number_of_work' =>'required',
            'details' =>'required'
        ]);
        $projects = new Project();
        $projects['icon'] = $request['icons'];
        $projects['number_of_works'] = $request['number_of_work'];
        $projects['details'] = $request['details'];
        $projects->save();
        $notification = [
            'message' => 'Project Saved Succesfully',
            'alert-type' => 'success'
        ];
        return redirect()->route('project.create')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($project)
    {
        $project = Project::find($project);
        return view('backend.project.edit-project', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project)
    {
        $update = Project::find($project);
        $update['icon'] = $request['icons'];
        $update['number_of_works'] = $request['number_of_work'];
        $update['details'] = $request['details'];
        $update->update();
        $notification =[
            'message' => 'Project Updated Successfully',
            'alert-type' => 'info'
        ];
        return redirect()->route('project.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project)
    {
        $delete = Project::find($project);
        $delete->delete();
        $notification = [
            'message' => 'Project Deleted Succesfully',
            'alert-type' => 'warning'
        ];
        return redirect()->route('project.index')->with($notification);
    }
}
