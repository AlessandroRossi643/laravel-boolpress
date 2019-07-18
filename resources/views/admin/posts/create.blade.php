@extends('layouts.app')
@section('content')
<div class="container">
  <form method="POST" action="{{route('admin.posts.store')}}">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
      <label for="content"></label>
      <textarea name="content" class="d-block" rows="8" cols="80" placeholder="Content"></textarea>
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" name="author" class="form-control" placeholder="Author">
    </div>
    <div class="form-group">
      <label for="slug">Slug(-)</label>
      <input type="text" name="slug" class="form-control" placeholder="Slug">
    </div>
    <select class="form-control" name="category_id">
      <option value="">Seleziona la categoria del post</option>
      @foreach ($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
    <button type="submit" class="btn btn-primary mt-4">Inserisci Post</button>
  </form>
</div>
@endsection
