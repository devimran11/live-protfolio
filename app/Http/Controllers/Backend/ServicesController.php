<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $views = Services::all();
        return view('backend.services.view-services', compact('views'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.add-services');
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
            'category_name' =>'required',
            'icons' => 'required'
        ]);
        $services = new Services();
        $services['category_name'] = $request['category_name'];
        $services['icon'] = $request['icons'];
        $services['description'] = $request['description'];
        $services->save();
        $notification = [
            'message' => 'Services Saved Successfully',
            'alery-type' => 'success'
        ];
        return redirect()->route('services.create')->with($notification);
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
    public function edit($services)
    {
        $edit = Services::find($services);
        return view('backend.services.edit-services', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $services)
    {
        $update = Services::find($services);
        $update['category_name'] = $request['category_name'];
        $update['icon'] = $request['icons'];
        $update['description'] = $request['description'];
        $update->update();
        $notification = [
            'message' => 'Services Updated Succesfully',
            'alert-type' => 'info'
        ];
        return redirect()->route('services.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($services)
    {
        $delete = Services::find($services);
        $delete->delete();
        $notification = [
            'message' => 'Services Deleted Succesfully',
            'alert-type' => 'info'
        ];
        return redirect()->route('services.index')->with($notification);
    }
}
