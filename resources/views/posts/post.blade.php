<div class="blog-post">
  <a href="/posts/{{ $post->id }}">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    
  </a>

  <p class="blog-post-meta">{{ $post->created_at->formatLocalized('%A %d %B %Y') }}: <a href="#">{{ $post->user->name }}</a></p>

  <p>{{ $post->body }}</p>
  
  <hr>

  <small>comments:</small>

  <div class="list-group">

    @foreach ($post->comments as $comment)
      <li class="list-group-item border border-bottom-0 border-right-0 border-top-0 border-info">
        <small>{{$comment->created_at->diffForHumans()}}</small> <strong>{{ $comment->user->name }}</strong> : {{$comment->body}}
      </li>
    @endforeach

  </div>

  <hr>

  <div class="list-group">
  <form method="POST" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}

    <div class="form-group">
      <input type="text" id="title" class="form-control" name="body" placeholder="Add comment" >
    </div>

  </form>
  </div>
  
</div>
