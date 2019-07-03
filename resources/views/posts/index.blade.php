@extends('layouts.app')


@section('content')
<h1>posts</h1>
@if(count($posts) > 0)
      @foreach($posts as $post)
      <div class="py-5 px-5">
      <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
      <small>Written on{{$post->created_at}} by {{$post->user->name}}</small>
      </div>
      @endforeach
      {{$posts->links()}}
@else
    <p>No Posts found</p>
@endif

@endsection