@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('msg'))
      <div class="alert alert-success">
        <p>{{session('msg')}}</p>
      </div>
    @endif
    <div class="row">
        @foreach ($posts as $post)
          <div class="col-md-4">
            <div class="thumbnail">
              <div class="caption">{{$post->title}}</div>
              <p><a href="/posts/{{$post->slug}}" class="btn btn-primary">Read Post</a></p>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
