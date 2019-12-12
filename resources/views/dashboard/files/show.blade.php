@extends('dashboard.admin')

@section('content')

        <!-- Icon Cards-->
        <div class="row">

        @foreach($posts as $post)
        <div class="col-xl-3 col-sm-6 mb-3 ml-5">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                </div>
                <div class="mr-5">{{$post->title}}</div>
                <p class="mt-3">{{Str::words($post->body,5)}}</p>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/posts/{{$post->id}}/edit">
                <span class="float-left">Edit</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              <a class="card-footer text-white clearfix small z-1" href="/posts/{{$post->id}}">
                <span class="float-left">View</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              <a data-toggle="modal" data-target="#deleteConf" class="card-footer text-white clearfix small z-1" href="/posts/delete">
                <span class="float-left">Delete</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
              <div class="modal fade" id="deleteConf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div style="color:#000;" class="modal-dialog" role="document">
          <form method="POST" action="/posts/{{$post-> id}}">
          @csrf
          @method('DELETE')
          <div style="color:#000;" class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this post?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">Click Delete if you want to delete, and close if you want to cancle </div>
                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger" href="/posts/{{$post->id}}/delete">Delete</a>
                          </div>
                        </div>
                      </div>
                </form>
            </div>
  </div>
            </div>
          </div>
        @endforeach

        </div>

@endsection