@extends('dashboard.admin')

@section('content')

    <div class="container">
        <h1>{{$msg->title}}</h1>
        <h5>{{$msg->name}}</h5>
        <p>{{$msg->body}}</p>
    </div>

@endsection