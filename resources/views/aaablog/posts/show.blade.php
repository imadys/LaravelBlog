@extends('aaablog.layout')

@section('content')
<div class="show-1-post">
    <div class="container">
<div class="row">
    <div class="col-md-12">
    <img class="imgs-in-show img-fluid" src="{{$post->img}}" alt="">
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    </div>
</div>
    </div>
    </div>
@endsection