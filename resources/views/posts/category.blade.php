@extends('layouts.app')
@section('title', 'Boolpress - Show posts for category')
@section('content')
<div class="container d-flex flex-column">
  <h1 class="my-2">CATEGORIA: {{$category->name}}</h1>
  @forelse ($posts as $post)
  <div class="card my-3">
    <div class="card-header">
      <h4><strong>Title: {{$post->title}}</strong></h4>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>{{$post->content}}</p>
        <footer class="blockquote-footer">
          <cite title="Source Title">{{$post->author}}</cite>
          <small class="ml-2">{{$post->created_at}}</small>
          <a class="btn btn-primary btn-lg float-right ml-2" href="{{route ('posts.show', $post->slug)}}" role="button">Guarda Post</a>
          <a class="btn btn-success btn-lg float-right" href="{{route ('home')}}" role="button">Torna alla Home</a>
        </footer>
      </blockquote>
    </div>
  </div>
  @empty
  <div class="card">
    <div class="card-body">
      Non ci sono post disponibili per questa categoria.
    </div>
  </div>
  @endforelse
</div>
@endsection
