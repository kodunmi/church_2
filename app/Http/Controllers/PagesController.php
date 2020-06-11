<?php

namespace App\Http\Controllers;

use App\Event;
use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index',[
            'events' => Event::all()->take(2)
        ]);

    }

    public function about(){

        return view('pages.about');

    }

    public function ministries(){

        return view('pages.ministries');

    }

    public function sermons(){

        return view('pages.sermons');

    }

    public function upcomingEvent(){

        return view('pages.events',[
            'events' => Event::all(),
            'posts' => Post::all()
        ]);

    }

    public function contact(){

        return view('pages.contact');

    }

    public function blogs(){

        return view('pages.blogs',[
            'posts' => Post::where('feature' , true)->paginate(10)
        ]);

    }

    public function singleBlog($post){
        $post = Post::find($post);

        return view('pages.blog',[
            'post' => $post
        ]);

    }

    public function showEvent($id){

        return view('pages.event',[
            'event' => Event::find($id)
        ]);

    }
}
