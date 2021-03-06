<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){

        $title = "Welcome to Programming Knowledge!!";

    	return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
    	 return view('pages.about')->with('title', $title);
    }

    public function services(){

        $data = array(
            'title' => 'Services',
            'services' => ['SEO','WEB Develop', 'WEB Design']
        );

    	return view('pages.service')->with($data);
    }
}
