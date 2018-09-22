<?php

namespace App\Http\Controllers;

use App\Newz;
use App\Event;

class PagesController extends Controller
{
    public function index(){
        $news = Newz::orderBy('created_at','asc')->take(3)->get();
        $events = Event::orderBy('created_at','asc')->take(3)->get();

        $data = array(
            'news'=>$news,
            'events'=>$events
        );

        return view('pages.index')->with($data);
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

    public function news_n_updates_details($slug){
        //fetch current page news
        $newz = Newz::where('slug',$slug)->first();

        //fetch the more news on side of the page
        $news = Newz::where('slug', '!=' , $slug)->orderBy('created_at','asc')->take(4)->get();

        // Get the current URL including the query string...
        $page_url = url()->full();
        $data=array(
           'newz'=>$newz,
           'more_newz'=>$news,
           'page_url'=>$page_url
       );
        return view('pages.news-n-updates-details')->with($data);
    }

    public function events_details($slug){
        $event = Event::where('slug',$slug)->first();

        //fetch the more events on side of the page
        $events = Event::where('slug', '!=' , $slug)->orderBy('created_at','asc')->take(4)->get();
        //fetch latest news on side of the page
        $news = Newz::orderBy('created_at','asc')->take(4)->get();
        $data = array(
            'event'=>$event,
            'events'=>$events,
            'news'=>$news
        );
        return view('pages.event-details')->with($data);
    }
    
}
