<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
    	return view('pages.about');
    }
    
    public function photography()
    {
    	return view('pages.photography');
    }

    public function event()
    {
    	return view('pages.event');
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}
