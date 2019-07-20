@extends('layouts.app')
@section('title', 'Boolpress - Crea categoria')
@section('content')
<div class="container">
  <form method="POST" action="{{route('admin.categories.store')}}">
    @csrf
    <div class="form-group row">
      <label for="category" class="col-sm-2 col-form-label">Categoria</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" placeholder="name">
        @error ('name')
        <div class="alert alert-danger" role="alert">{{$message}}</div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="slug" class="col-sm-2 col-form-label">Slug</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="slug" placeholder="slug">
        @error ('slug')
        <div class="alert alert-danger" role="alert">{{$message}}</div>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Crea</button>
      </div>
    </div>
  </form>
</div>
@endsection
