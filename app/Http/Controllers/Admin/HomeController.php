<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class HomeController extends Controller
{

    public function index()
    {
      $posts=Post::all();
      return view('admin.home', compact('posts'));
    }
}
