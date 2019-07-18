@extends('layouts.app')
@section('content')
<div class="container">
  <div class="alert alert-success" role="alert">
    Post creato con successo!
  </div>
  <a class="btn btn-primary btn-lg mt-3" href="{{route ('home')}}" role="button">Torna alla Home</a>
</div>
@endsection
