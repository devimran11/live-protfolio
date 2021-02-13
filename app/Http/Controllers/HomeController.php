<?php

namespace App\Http\Controllers;

use App\About;
use App\Comment;
use Illuminate\Http\Request;
use App\MenuModel;
use App\Logo;
use App\Project;
use App\Services;
use App\Slider;
use App\get_in_touch;
use App\Protfolio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
            $data['viewMenus'] = MenuModel::all();
            $data['logo'] = Logo::first();
            $data['slider'] = Slider::first();
            $data['about'] = About::first();
            $data['services'] = Services::all();
            $data['projects'] = Project::all();
            $data['contact'] = get_in_touch::first();
            $data['protfolios'] = Protfolio::all();
            $data['comments'] = Comment::all();
        
        return view('frontend.layouts.master', $data);
    }
}
