@extends('dashboard.admin')

@section('content')
    <div class="container">
    <div class="row">

@foreach($msgs as $msg)
    <div class="col-md-3 ml-5">
<div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$msg->title}}</h5>
                    <p class="card-title">name: <span style="color: green;">{{$msg->name}}</span></p>
                    <p class="card-text">{{Str::words($msg->body,9)}}</p>
                    <a href="/dashboard/msg/{{$msg->id}}/full-msg" class="btn btn-primary">Read More</a>
                    <a href="/dashboard/msg/{{$msg->id}}/delete" class="btn btn-danger">Delete Message</a>
                </div>
            </div>
    </div>
@endforeach

</div>
    </div>
@endsection