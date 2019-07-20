<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class CategoryController extends Controller
{
  public function create()
  {
    return view('admin.categories.create', compact('categories'));
  }

  public function store(Request $request)
  {
    $rules=[
      'name'=>'required|max:255|bail',
      'slug'=> 'required|max:255'
    ];
    $messages=[
      'name.required'=>'Inserisci il titolo',
      'name.max=255'=>'Il titolo non può contenere più di 255 parole',
      'slug.required'=>'Inserisci lo slug',
      'slug.max=255'=>'Lo slug non può contenere più di 255 parole'
    ];
    $validatedData=$request->validate($rules,$messages);

    $dati=$request->all();
    $newPost = New Category();
    $newPost->fill($dati);
    $newPost->save();
    return view('admin.categories.store');
  }
}
