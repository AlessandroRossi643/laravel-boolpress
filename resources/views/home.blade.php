@extends('layouts.app')
@section('title', 'Boolpress - Home')
@section('content')
<div class="container d-flex flex-column">
  <h1 class="my-2">POST RECENTI</h1>
  @forelse ($posts as $post)
  <div class="card my-3">
    <div class="card-header">
      <h4><strong>Title: {{$post->title}}</strong></h4>
      <h5><strong>Category: </strong> <a href="{{route ('posts.category',$post->category->slug)}}">{{$post->category->name}}</a></h5>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>{{$post->content}}</p>
        <footer class="blockquote-footer">
          <cite title="Source Title">{{$post->author}}</cite>
          <small class="ml-2">{{$post->created_at}}</small>
          <a class="btn btn-primary btn-lg float-right" href="{{route ('posts.show', $post->slug)}}" role="button">Guarda Post</a>
        </footer>
      </blockquote>
    </div>
  </div>
  @empty
  <div class="card">
    <div class="card-body">
      Non ci sono post disponibili.
    </div>
  </div>
  @endforelse
</div>
@endsection
