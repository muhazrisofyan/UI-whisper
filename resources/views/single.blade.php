@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1>{{$post->title}}</h1>
      <p>{{$post->subject}}</p>
      <p>Written By: {{$post->user->name}}</p>

      <p><a href="/posts" class="btn btn-primary">Back</a></p>
    </div>
  </div>
@endsection
