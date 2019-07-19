@extends('layouts.app')
@section('content')
<div class="container">
  <form method="POST" action="{{route('admin.posts.update',$posts->id)}}"> @method('PUT')
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" name="title" value="{{old('title',$posts->title)}}">
      @error ('title')
      <div class="alert alert-danger" role="alert">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="content"></label>
      <textarea name="content" class="d-block" rows="8" cols="80">"{{old('content',$posts->content)}}"</textarea>
      @error ('content')
      <div class="alert alert-danger" role="alert">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" name="author" class="form-control" value="{{old('author',$posts->author)}}">
      @error ('author')
      <div class="alert alert-danger" role="alert">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="slug">Slug(-)</label>
      <input type="text" name="slug" class="form-control" value="{{old('slug',$posts->slug)}}">
      @error ('slug')
      <div class="alert alert-danger" role="alert">{{$message}}</div>
      @enderror
    </div>
    <select class="form-control" name="category_id">
      <option value="">Seleziona la categoria del post</option>
      @foreach ($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
    <button type="submit" class="btn btn-primary mt-4">Modifica Post</button>
  </form>
</div>
@endsection
