<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Like;

class MainController
{

    public function addLike(Request $request) {
        $request->ip_address = $request->ip();
        Like::create($request->all());
        return view('main');
    }

    public function index(){
        $blogs = Blog::orderByDesc('created_at')->get()->where('status','active');
        $likes = Like::all();

        return view('main',compact('blogs', 'likes'));
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function dev(){
        $devs = Blog::orderByDesc('created_at')->get()->where('category','development')->where('status','active');
        return view('categories.dev',compact('devs'));
    }
    public function sports(){
        $sports = Blog::orderByDesc('created_at')->get()->where('category','sport')->where('status','active');
        return view('categories.sports',compact('sports'));
    }
    public function life(){
        $lifes = Blog::orderByDesc('created_at')->get()->where('category','life')->where('status','active');
        return view('categories.life',compact('lifes'));
    }
    public function music(){
        $musics = Blog::orderByDesc('created_at')->get()->where('category','music')->where('status','active');
        return view('categories.music',compact('musics'));
    }
    public function resume($category,$slug){
        $resumeBlog = Blog::whereSlug($slug)->first();
        return view('categories.resume',compact('resumeBlog'));
    }
}
