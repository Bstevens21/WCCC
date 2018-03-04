<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $page = 'Home';
        return view('pages.home')->with('page', $page);
    }

    public function about(){
        $page = 'About';
        return view('pages.about')->with('page', $page);
    }

    public function archive(){
        $page = 'Archive';
        return view('pages.archive')->with('page', $page);
    }
}
