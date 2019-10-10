<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['featured_posts'] = Post::with(['category','author'])->published()->where('is_featured',1)->get();
        $data['latest_posts'] = Post::with(['category','author'])->published()->orderBy('id','desc')->paginate(8);
//        dd($data['latest_posts']);
        return view('front.index',$data);
    }
}
