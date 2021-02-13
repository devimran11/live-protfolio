<?php

namespace App\Http\Controllers\Backend;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $views = About::all();
        return view('backend.about.view-about', compact('views'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.add-about');
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
            'name' =>'required',
            'profile' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'html' =>'required',
            'css' =>'required',
            'php' =>'required',
            'javascript' =>'required',
            'image' =>'required',
        ]);
        $about = new About();
        $about['name'] = $request['name'];
        $about['profile'] = $request['profile'];
        $about['email'] = $request['email'];
        $about['phone'] = $request['phone'];
        $about['html'] = $request['html'];
        $about['css'] = $request['css'];
        $about['php'] = $request['php'];
        $about['javascript'] = $request['javascript'];
        $about['about_me'] = $request['about_me'];
        $photo = $request->file('image');
        if($photo){
            $photo_full_name = time().'.'. $photo->getClientOriginalExtension();
            $photo->move(public_path('backend/images/about/'), $photo_full_name);
            $about['image'] = $photo_full_name;
        }
        $about->save();
        $notification=[
            'message' =>'About Saved Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->route('about.index')->with($notification);
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
    public function edit($about)
    {
        $edit = About::find($about);
        return view('backend.about.edit-about', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $about)
    {
        $update = About::find($about);
        $update['name'] = $request['name'];
        $update['profile'] = $request['profile'];
        $update['email'] = $request['email'];
        $update['phone'] = $request['phone'];
        $update['html'] = $request['html'];
        $update['css'] = $request['css'];
        $update['php'] = $request['php'];
        $update['javascript'] = $request['javascript'];
        $update['about_me'] = $request['about_me'];
        $photo = $request->file('image');
        if($photo){
            unlink('backend/images/about/'.$about->image);
            $photo_full_name = time().'.'. $photo->getClientOriginalExtension();
            $photo->move(public_path('backend/images/about/'), $photo_full_name);
            $update['image'] = $photo_full_name;
        }
        $update->update();
        $notification=[
            'message' =>'About Updated Successfully',
            'alert-type' => 'info'
        ];
        return redirect()->route('about.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($about)
    {
        $delete = About::find($about);
        if($delete->image){
            unlink('backend/images/about/'. $delete->image);
        }
        $delete->delete();
        $notification = [
            'message' => 'About Deleted Succesfully',
            'alert-type' => 'warning',
        ];
        return redirect()->route('about.index')->with($notification);
    }
}
