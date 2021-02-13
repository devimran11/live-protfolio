<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Protfolio;
use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $views = Protfolio::all();
        return view('backend.protfolio.view-protfolio', compact('views'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.protfolio.add-protfolio');
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
            'title' => 'required',
            'category' => 'required',
        ]);
        $protfolio = new Protfolio();
        $protfolio->title = $request->title;
        $protfolio->category = $request->category;
        $photo = $request->file('image');
        $photo_full_name = time().'.'.$photo->getClientOriginalExtension();
        $photo->move(public_path('backend/images/protfolio/'), $photo_full_name);
        $protfolio->image = $photo_full_name;
        $protfolio->save();
        $notification = [
            'message' => 'Protfolio Saved Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('protfolio.create')->with($notification);
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
    public function edit($protfolio)
    {
        $edit = Protfolio::find($protfolio);
        return view('backend.protfolio.edit-protfolio', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $protfolio)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);
        $update = Protfolio::find($protfolio);
        $update->title = $request->title;
        $update->category = $request->category;
        $photo = $request->file('image');
        if($photo){
            unlink('backend/images/protfolio/'.$update->image);
            $photo_full_name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('backend/images/protfolio/'), $photo_full_name);
            $update->image = $photo_full_name;
        }
        $update->update();
        $notification = [
            'message' => 'Protfolio Updated Successfully',
            'alert-type' => 'info'
        ];
        return redirect()->route('protfolio.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($protfolio)
    {
        $delete = Protfolio::find($protfolio);
        if($delete->image){
            unlink('backend/images/protfolio/'.$delete->image);
        }
        $delete->delete();
        $notification = [
            'message' => 'Protfolio Deleted Successfully',
            'alert-type' => 'warning'
        ];
        return redirect()->route('protfolio.index')->with($notification);
    }
}
