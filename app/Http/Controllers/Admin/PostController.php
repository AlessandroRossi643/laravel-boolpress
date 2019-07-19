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

    }

    public function create()
    {
      $categories = Category::all();
      return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
      $rules=[
        'title'=>'required|max:255|bail',
        'content'=> 'required',
        'author'=> 'required',
        'slug'=>'required'
      ];
      $messages=[
        'title.required'=>'Inserisci il titolo',
        'title.max=255'=>'Il titolo non può contenere più di 255 parole',
        'content.required'=>'Inserisci il contenuto',
        'author.required'=>'Inserisci l\'autore',
        'slug.required'=>'Inserisci lo slug',
      ];
      $validatedData=$request->validate($rules,$messages);

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

    public function destroy(Post $id)
    {
      $post=Post::find($id);
      if (empty($id)) {
        abort (404);
      }
      $id->delete();
      return redirect()->route('home');
    }
}
