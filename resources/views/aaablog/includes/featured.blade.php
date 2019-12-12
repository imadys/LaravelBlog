<div class="container">
  <div class="row">
    @foreach( $posts as $post )
    <div class="col-md-4">
      <h2>{{$post->title}}</h2>
      <p>{{Str::words($post->body,15)}}</p>
      <!-- <img src="$article->img " alt=""> -->
      <p><a class="btn btn-secondary" href="/posts/{{$post->id}}" role="button">Read More &raquo;</a></p>
    </div>
    @endforeach
  </div>
  <hr>
</div>
</main>