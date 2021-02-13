<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function viewLogo(){
        $viewLogos = Logo::all();
        $logoCounts = $viewLogos->count();
        return view('backend.logo.view-logo', compact('viewLogos', 'logoCounts'));
    }
    public function addLogo(){
        return view('backend.logo.add-logo');
    }
    public function storeLogo(Request $request){
        $request->validate([
            'image' =>'required'
        ]);
        $logo = new Logo();
        $photo = $request->file('image');
        $photo_full_name = time().'.'.$photo->getClientOriginalExtension();
        $photo->move(public_path('backend/images/logo/'), $photo_full_name);
        $logo->logo = $photo_full_name;
        $logo->save();
        $notification = [
            'message' => 'Logo Saved Succesfully',
            'alert-type' => 'info',
        ];
        return redirect()->route('view.logo')->with($notification);
    }
    public function editLogo($id){
        $editLogo = Logo::find($id);
        return view('backend.logo.edit-logo', compact('editLogo'));
    }
    public function updateLogo(Request $request, $id){
        $updateLogo = Logo::find($id);
        $photo = $request->file('image');
        if($photo){
            unlink('backend/images/logo/'. $updateLogo->logo);
            $photo_full_name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('backend/images/logo/'), $photo_full_name);
            $updateLogo['logo'] = $photo_full_name;
        }
        $updateLogo->update();
        $notification = [
            'message' => 'Logo Updated Succesfully',
            'alert-type' => 'info',
        ];
        return redirect()->route('view.logo')->with($notification);
    }
    public function deleteLogo($id){
        $deleteLogo = Logo::find($id);
        if($deleteLogo->logo){
            @unlink(('backend/images/logo/'.$deleteLogo->logo));
        }
        $deleteLogo->delete();
        $notification = [
            'message' => 'Logo Deleted Succesfully',
            'alert-type' => 'warning',
        ];
        return redirect()->route('view.logo')->with($notification);
    }
}
