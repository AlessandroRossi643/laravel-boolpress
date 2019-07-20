@extends('layouts.app')
@section('title', 'Boolpress - Pannello di controllo')
@section('content')
<div class="container">
  <h2>PANNELLO DI CONTROLLO</h2>
  <a href="{{route ('admin.posts.create')}}" class="list-group-item list-group-item-action">Crea nuovo Post</a>
  <a href="{{route ('admin.categories.create')}}" class="list-group-item list-group-item-action">Crea nuovo categoria</a>

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Author</th>
        <th scope="col">Slug</th>
        <th scope="col">Category Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($posts as $post)
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
        <td>{{$post->author}}</td>
        <td>{{$post->slug}}</td>
        <td>{{$post->category->name}}</td>
        <td>
          <a class="btn btn-warning" href="{{route ('admin.posts.edit', $post->id)}}" role="button">Modifica Post</a>
          <form method="POST" class="list-group-item list-group-item-action p-0" action="{{route ('admin.posts.destroy', $post->id)}}" >
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-danger"value="Elimina Post">
          </form>
        </td>
      </tr>
      @empty
      <div class="alert alert-danger" role="alert">Non ci sono post presenti!</div>
      @endforelse
    </tbody>
  </table>

</div>
@endsection
