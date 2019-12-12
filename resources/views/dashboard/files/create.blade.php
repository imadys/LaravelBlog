@extends('dashboard.admin')

@section('content')
    <div class="container">
    <form method="POST" action="/posts">
    @csrf
  <div class="form-group col-md-6">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="make it short">
  </div>
  <div class="form-group col-md-6">
    <label for="img">Image URL</label>
    <input type="text" name="img" class="form-control" id="formGroupExampleInput2" placeholder="like :https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png">
  </div>
  <div class="form-group">
      <textarea name="body" cols="100" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Post</button>
</form>
    </div>
@endsection