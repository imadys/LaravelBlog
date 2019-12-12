@extends('dashboard.admin')

@section('content')
    <div class="container">
    <form method="POST" action="/posts/{{$post-> id}}">
    @csrf
    @method('PUT')
    
  <div class="form-group col-md-6">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="formGroupExampleInput" value="{{ $post->title }}">
  </div>
  <div class="form-group col-md-6">
    <label for="img">Image URL</label>
    <input type="text" name="img" class="form-control" id="formGroupExampleInput2" value="{{ $post->img }}">
  </div>
  <div class="form-group">
      <textarea name="body" cols="100" rows="10">{{ $post->body }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
@endsection