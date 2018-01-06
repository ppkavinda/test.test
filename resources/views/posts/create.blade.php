@extends('layouts.master')

  @section('content')
  <div class="blog-post">
    <form method="POST" action="/posts/create">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Email address</label>
        <input type="text" id="title" class="form-control" name="title" >
      </div>
      <div class="form-group">
        <label for="body">body</label>
        <textarea name="body" id="body" class="form-control" ></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  @endsection