@extends('default')

@section('content')
  <h1>{{$user->name}}'s Profile.</h1>
  <p>See what {{$user->name}} has been up to in Laravel-Forum.</p>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <h3>Posts</h3>
      @if($user->posts->count() > 0)
      @foreach($user->posts as $post)
        <div class="card">
          <div class="card-body">
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->description }}</p>
          </div>
          <div class="card-footer">
            <a href="{{route('posts.show', $post->id)}}" class="btn btn-link">View Question</a>
          </div>
        </div>
        <hr>
      @endforeach
      @else
        <h6>{{ $user->name }} hasn't posted anything yet.</h6>
      @endif
    </div>

    <div class="col-md-6">
      <h3>Comments</h3>
      @if($user->comments->count() > 0)
      @foreach($user->comments as $comment)
        <div class="card">
          <div class="card-header">
            {{$comment->post->title}}
          </div>
          <div class="card-body">
            <p>{{$comment->body}}</p>
          </div>
          <div class="card-footer">
            <a href="{{route('posts.show', $comment->post->id)}}" class="btn btn-link">View Question</a>
          </div>
        </div>
        <hr>
      @endforeach
      @else
        <h6>{{ $user->name }} hasn't commented anything yet.</h6>
      @endif
    </div>
  </div>
@endsection
