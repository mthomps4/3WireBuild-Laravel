<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
      return view('welcome');
    }
    // 404 Page
    public function reroute(Request $request){
      $page = $request->page;
      return view('errors.404', compact('page'));
    }

    public function contact()
    {
      return view('contact');
    }

    public function projects()
    {
      return view('projects');
    }

}
