<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about(){
        return view('pages.about-us');
    }

    public function news_n_updates(){
        return view('pages.news-n-updates');
    }

    public function events_details(){
        return view('pages.event-details');
    }
    
}
