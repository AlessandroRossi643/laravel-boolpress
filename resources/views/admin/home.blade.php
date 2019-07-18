@extends('layouts.app')

@section('content')
<div class="container">
  <h2>PANNELLO DI CONTROLLO</h2>
  <div class="list-group">
    <a href="{{route ('admin.posts.create')}}" class="list-group-item list-group-item-action">Crea nuovo Post</a>
    <a href="#" class="list-group-item list-group-item-action">Modifica Post esistente</a>
    <a href="#" class="list-group-item list-group-item-action">Elimina Post esistente</a>
    <a href="#" class="list-group-item list-group-item-action">Inserisci nuova categoria</a>
  </div>
</div>
@endsection
