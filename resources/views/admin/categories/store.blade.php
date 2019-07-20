@extends('layouts.app')
@section('title', 'Boolpress - Categoria creata con successo')
@section('content')
<div class="container">
  <div class="alert alert-success" role="alert">
    Categoria creata con successo!
  </div>
  <a class="btn btn-primary btn-lg mt-3" href="{{route ('home')}}" role="button">Torna alla Home</a>
</div>
@endsection
