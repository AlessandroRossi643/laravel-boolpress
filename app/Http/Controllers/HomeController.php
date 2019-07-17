<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
  public function index()
  {
    $posts=Post::orderBy('updated_at','desc')->limit(5)->get();
    return view('home',compact('posts'));
  }
}
