@extends('dashboard.admin')

@section('content')
    <div class="container">
    <form method="POST" action="/posts">
    @csrf
  <div class="form-group col-md-6">
    <label for="title">Title</label>
    <input value="{{old('title')}}" type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="formGroupExampleInput" placeholder="make it short">
      @error('title')
      <p class="text-danger">{{$errors->first('title')}}</p>
      @enderror
  </div>
  <div class="form-group col-md-6">
    <label for="img">Image URL</label>
    <input value="{{old('img')}}" type="text" name="img" class="form-control @error('img') is-invalid @enderror" id="formGroupExampleInput2" placeholder="like :https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png">
      @error('img')
      <p class="text-danger">{{$errors->first('img')}}</p>
      @enderror
    </div>
  <div class="form-group">
      <textarea class="@error('body') is-invalid @enderror" name="body" cols="100" rows="10">{{old('body')}}</textarea>
      @error('body')
      <p class="text-danger">{{$errors->first('body')}}</p>
      @enderror
  </div>
  <button type="submit" class="btn btn-primary">Post</button>
</form>
    </div>
@endsection