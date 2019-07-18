<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PostController extends Controller
{

    public function index()
    {
      //
    }

    public function create()
    {
      $categories = Category::all();
      return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
      $dati=$request->all();
      $newPost = New Post();
      $newPost->fill($dati);
      $newPost->save();
      return view('admin.posts.store');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
