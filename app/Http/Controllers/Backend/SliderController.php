<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $countSlider = $sliders->count();
        return view('backend.slider.view-slider', compact('sliders', 'countSlider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.add-slider');
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
            'designation' =>'required',
            'image' =>'required',
        ]);
        
        $photo = $request->file('image');
        $photo_full_name = time().'.'. $photo->getClientOriginalExtension();
        $photo->move(public_path('backend/images/slider/'), $photo_full_name);
        $sliderStore = new Slider();
        $sliderStore['name'] = $request['name'];
        $sliderStore['designation'] = $request['designation'];
        $sliderStore['slider'] = $photo_full_name;
        $sliderStore->save();
        $notification = [
            'message' => 'Slider Saved Succesfully',
            'alert-type' => 'info',
        ];
        return redirect()->route('slider.index')->with($notification);
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
    public function edit($id)
    {
        $edit = Slider::find($id);
        return view('backend.slider.edit-slider', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slider)
    {
        $request->validate([
            'name' =>'required',
            'designation' =>'required',
            'image' =>'required',
        ]);
        $sliderUpdate = Slider::find($slider);
        $sliderUpdate['name'] = $request['name'];
        $sliderUpdate['designation'] = $request['designation'];
        $photo = $request->file('image');
        if($photo){
            unlink('backend/images/slider/'.$sliderUpdate->slider);
            $photo_full_name = time().'.'. $photo->getClientOriginalExtension();
            $photo->move(public_path('backend/images/slider/'), $photo_full_name);
            $sliderUpdate['slider'] = $photo_full_name;
        }
        $sliderUpdate->save();
        $notification = [
            'message' => 'Slider Updated Succesfully',
            'alert-type' => 'info',
        ];
        return redirect()->route('slider.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slider)
    {
        $delteSlider = Slider::find($slider);
        if($delteSlider->slider){
            unlink('backend/images/slider/'.$delteSlider->slider);
            $delteSlider->delete();
        }else{
            $delteSlider->delete();
        }
        
        $notification = [
            'message' => 'Slider Updated Succesfully',
            'alert-type' => 'info',
        ];
        return redirect()->route('slider.index')->with($notification);
    }
}
