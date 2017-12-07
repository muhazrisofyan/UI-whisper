@extends('layouts.app')

@section('content')
<div class="container">

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="/posts" method="POST">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" style="form-control" name="title" value="{{old('title')}}">
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <textarea name="subject" style="form-control" rows="8" cols="80">{{old('subject')}}</textarea>
      </div>
      {{csrf_field()}}

      <button type="submit" name="submit" style="btn btn-default btn-block">Submit</button>
    </form>
</div>
@endsection
