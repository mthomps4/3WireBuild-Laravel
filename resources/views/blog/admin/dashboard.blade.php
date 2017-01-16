@extends('layouts.app')
@section('content')
  @include('blog.sidebarFunctions');

<div class="container">
  <h1 class="pageTitle">Dashboard</h1>

  <div class="dashContainer">
    <div class="dashCard">
      <h4>Create A New Post</h4>
      <a href="/addpost"><button type="button" name="addPost" class="btn btn-primary">Create New Blog Post</button></a>
    </div>

    <div class="dashCard">
      <h4>Find and Edit by Date:</h4>
          @foreach ($posts_by_date as $date => $posts)
          <div class="btn-group">
            <button type="button" class="btn btn-info btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{$date}}<span class="caret"></span>
            </button>
          <ul class="dropdown-menu customDefault">
            @foreach ($posts as $post)
              <li><a class="dropdown-item" href="/editpost/{{$post->id}}">{{ $post->title }}</a></li>
            @endforeach
          </div>
          @endforeach
    </div>

    <div class="dashCard">
      <h4>Find and Delete by Date:</h4>
          @foreach ($posts_by_date as $date => $posts)
          <div class="btn-group">
            <button type="button" class="btn btn-info btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{$date}}<span class="caret"></span>
            </button>
          <ul class="dropdown-menu customDefault">
            @foreach ($posts as $post)
              <li><a class="dropdown-item" href="/deletepost/{{$post->id}}">{{ $post->title }}</a></li>
            @endforeach
          </div>
          @endforeach
    </div>
  </div>

    <div class="recentPosts">
      <h3 class="pageTitle">Recent Posts</h3>
      @foreach($blogposts->reverse() as $post)
        <p>
          {{$post->title}} | {{$post->created_at->format('F-d-Y')}} | <a href="/editpost/{{$post->id}}">Edit</a> | <a href="/deletepost/{{$post->id}}">Delete</a>
        </p>
      @endforeach
    </div>


</div>

@endsection
