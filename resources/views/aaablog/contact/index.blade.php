@extends('aaablog.layout')

@section('content')
<div class="container mb-5" style="margin-top:5rem;">
    <form method="POST">
    @csrf
    <h1>Contact Form</h1>
  <div class="form-group col-md-6">
    <label for="title">Title</label>
    <input type="text" value="{{old('title')}}" name="title" class="form-control @error('title') is-invalid @enderror" id="formGroupExampleInput" placeholder="make it short">
    @error('title')
    <p class="text-danger">{{$errors->first('title')}}</p>
    @enderror
  </div>
  <div class="form-group col-md-6">
    <label for="name">Your Name</label>
    <input value="{{old('name')}}" type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="formGroupExampleInput2" placeholder="name">
    @error('name')
    <p class="text-danger">{{$errors->first('name')}}</p>
    @enderror
  </div>
  <div class="form-group">
      <textarea name="body" cols="100" rows="10">{{old('body')}}</textarea>
      @error('body')
    <p class="text-danger">{{$errors->first('body')}}</p>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Send</button>
</form>
    </div>
@endsection