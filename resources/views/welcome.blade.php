@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      @foreach ($posts as $post)
        <div class="col-md-4">
          <div class="thumbnail">
            <div class="caption">{{$post->title}}</div>
            <p><a href="/posts/single/{{$post->slug}}" class="btn btn-primary">Read Post</a></p>
          </div>
        </div>
      @endforeach
  </div>
</div>
@endsection
