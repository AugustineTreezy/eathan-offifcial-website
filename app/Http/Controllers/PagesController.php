<?php

namespace App\Http\Controllers;

use App\Newz;
use App\Event;
use App\NewsCategory;
use App\NewsCategoryId;
use Conner\Tagging\Model\Tag;
use DB;

class PagesController extends Controller
{
    public function index(){
        $news = Newz::orderBy('created_at','desc')->take(3)->get();
        $events = Event::orderBy('created_at','desc')->take(3)->get();

        $data = array(
            'news'=>$news,
            'events'=>$events
        );

        return view('pages.index')->with($data);
    }

    public function what_we_do(){
        return view('pages.what-we-do');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about(){
        return view('pages.about-us');
    }

    public function news_n_updates(){        
        $news = Newz::orderBy('created_at','desc')->paginate(6);
        //fetch events
        $events = Event::orderBy('created_at','desc')->take(3)->get();        
        //fetch tags used more than once
        $popular_tags = Tag::where('count', '>', 1)->take(15)->orderBy('count','desc')->get();
        //fetch categories
        $categories = NewsCategory::select('news_categories.category','news_categories.slug', DB::raw('count(news_category_ids.category_id) as total'))
                        ->join('news_category_ids','news_category_ids.category_id','=','news_categories.id')
                        ->groupBy('news_categories.category','news_categories.slug')
                        ->get();
        $data = array(
            'news'=>$news,
            'events'=>$events,
           'categories'=>$categories,
           'popular_tags'=>$popular_tags
        );
        return view('pages.news-n-updates')->with($data);
    }

    public function news_n_updates_details($slug){
        //fetch current page news
        $newz = Newz::where('slug',$slug)->first();

        //get next page
        $next = Newz::where('id', '>', $newz->id)->orderBy('id','asc')->first();
        
        //get previous page
        $previous = Newz::where('id', '<', $newz->id)->orderBy('id','desc')->first();
        
        //fetch the more news on side of the page
        $news = Newz::where('slug', '!=' , $slug)->orderBy('created_at','desc')->take(4)->get();
        //fetch events
        $events = Event::orderBy('created_at','desc')->take(3)->get();

        //fetch its tags
        $tagged = Newz::with('tagged')->first();
        $tagged = $newz->tagged;

        //fetch categories
        $categories = NewsCategory::select('news_categories.category','news_categories.slug', DB::raw('count(news_category_ids.category_id) as total'))
                        ->join('news_category_ids','news_category_ids.category_id','=','news_categories.id')
                        ->groupBy('news_categories.category','news_categories.slug')
                        ->get();

        // Get the current URL including the query string...
        $page_url = url()->full();
        $data=array(
           'newz'=>$newz,
           'next'=>$next,
           'previous'=>$previous,
           'more_newz'=>$news,
           'page_url'=>$page_url,
           'events'=>$events,
           'categories'=>$categories
       );
        return view('pages.news-n-updates-details')->with($data);
    }

    public function news_n_updates_tags($tag){

        //fetch newz containing the tag
        $news = Newz::withAnyTag([$tag])->paginate(6);
        //fetch tags used more than once
        $popular_tags = Tag::where('count', '>', 1)->take(15)->orderBy('count','desc')->get();
        //fetch events
        $events = Event::orderBy('created_at','desc')->take(3)->get();

        //fetch categories
        $categories = NewsCategory::select('news_categories.category','news_categories.slug', DB::raw('count(news_category_ids.category_id) as total'))
                        ->join('news_category_ids','news_category_ids.category_id','=','news_categories.id')
                        ->groupBy('news_categories.category','news_categories.slug')
                        ->get();
        $data=array(
           'link'=>ucfirst($tag),
           'news'=>$news,
           'events'=>$events,
           'categories'=>$categories,
           'popular_tags'=>$popular_tags
        );
        return view('pages.news-n-updates')->with($data);
    }

    public function news_n_updates_category($category){   
        $news_category_id = NewsCategory::select('id')->where('slug','=',$category)->first(); 
        
        $news = Newz::select('newzs.title','newzs.image_name','newzs.body','newzs.slug','newzs.created_at')
                ->join('news_category_ids','news_category_ids.news_id','=','newzs.id')
                ->join('news_categories','news_categories.id','=','news_category_ids.category_id')
                ->orderBy('newzs.created_at','desc')
                ->where('news_categories.id',$news_category_id->id)
                ->paginate(6);
        //fetch events
        $events = Event::orderBy('created_at','desc')->take(3)->get();
        //fetch tags used more than once
        $popular_tags = Tag::where('count', '>', 1)->take(15)->orderBy('count','desc')->get();
        //fetch categories
        $categories = NewsCategory::select('news_categories.category','news_categories.slug', DB::raw('count(news_category_ids.category_id) as total'))
                        ->join('news_category_ids','news_category_ids.category_id','=','news_categories.id')
                        ->groupBy('news_categories.category','news_categories.slug')
                        ->get();
        
        $data = array(
            'link'=>ucfirst($category),
            'news'=>$news,
            'events'=>$events,
           'categories'=>$categories,
           'popular_tags'=>$popular_tags
        );
        return view('pages.news-n-updates')->with($data);
    }

    public function events_details($slug){
        $event = Event::where('slug',$slug)->first();

        //fetch the more events on side of the page
        $events = Event::where('slug', '!=' , $slug)->orderBy('created_at','desc')->take(4)->get();
        //fetch latest news on side of the page
        $news = Newz::orderBy('created_at','desc')->take(4)->get();
        $data = array(
            'event'=>$event,
            'events'=>$events,
            'news'=>$news
        );
        return view('pages.event-details')->with($data);
    }
    
}
