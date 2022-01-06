<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

 class LikeController extends Controller
{

    public function LikeCount()
    {
         $likesCount = Like::all();
         return dd($likesCount);
    }

    public function addLike(Request $request) {
        $request->ip_address = $request->ip();
        $like = new Like();
        $like->blog_id = $request->blog_id;
        $like->ip_address = $request->ip_address;
        $like->save();
        return response()->json(['başarılı'], 201);
    }
}
