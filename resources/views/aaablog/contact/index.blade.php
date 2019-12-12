@extends('aaablog.layout')

@section('content')
<div class="container mb-5" style="margin-top:5rem;">
    <form method="POST">
    @csrf
    <h1>Contact Form</h1>
  <div class="form-group col-md-6">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="make it short">
  </div>
  <div class="form-group col-md-6">
    <label for="name">Your Name</label>
    <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="name">
  </div>
  <div class="form-group">
      <textarea name="body" cols="100" rows="10"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Send</button>
</form>
    </div>
@endsection