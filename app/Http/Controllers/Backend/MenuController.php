<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function viewMenu(){
        $viewMenus = MenuModel::all();
        return view('backend.menu.view-menu', compact('viewMenus'));
    }
    public function addMenu(){
        return view('backend.menu.add-menu');
    }
    public function storeMenu(Request $request){
        $request->validate([
            'menu' => 'required|unique:menu_models',
        ]);
        $storeMenu = new MenuModel();
        $storeMenu['menu'] = $request['menu'];
        $storeMenu->save();
        $notification = [
            'message' => 'Menu Saved Succesfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('add.menu')->with($notification);
    }
    public function editMenu($id){
        $editMenu = MenuModel::find($id);
        return view('backend.menu.edit-menu', compact('editMenu'));
    }
    public function updateMenu(Request $request, $id){
        $request->validate([
            'menu' => 'required',
        ]);
        $updateMenu = MenuModel::find($id);
        $updateMenu['menu'] = $request['menu'];
        $updateMenu->update();
        $notification = [
            'message' => 'Menu Updated Succesfully',
            'alert-type' => 'info',
        ];
        return redirect()->route('view.menu')->with($notification);
    }
    public function deleteMenu($id){
        $deleteMenu = MenuModel::find($id);
        $deleteMenu->delete();
        $notification = [
            'message' => 'Menu Deleted Succesfully',
            'alert-type' => 'warning',
         ];
        return redirect()->route('view.menu')->with($notification);
    }
}
