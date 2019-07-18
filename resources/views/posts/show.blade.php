@extends('layouts.app')
@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">{{$post->title}}</h1>
    <p class="lead">{{$post->content}}</p>
    <cite title="Source Title">{{$post->author}}</cite>
    <small class="ml-2">{{$post->created_at}}</small>
    <hr class="my-4">
    <h3><strong>Category:</strong> {{$post->category->slug}}</h3>
    <a class="btn btn-primary btn-lg mt-3" href="{{route ('home')}}" role="button">Torna alla Home</a>
  </div>
</div>
@endsection
