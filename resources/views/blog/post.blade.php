@extends('layouts.blog')
@section('blogContent')
  <img src="{{$blogpost->imageURL}}" alt="Featured Image" class="postFeaturedImage">
  <h1 class="blogPostTitle"> {{$blogpost->title}}</h1>
  <div class="blogpostBody clearfix">
    {!! html_entity_decode($blogpost->body) !!}
    <br />
    <p class="blogpostAuthor">
      ~{{$blogpost->author}} <br />
      {{$blogpost->created_at->format('F-d-Y')}}
    </p>
  </div>
  <hr>

    <div class="commentContainer">

      <h3> Comment Below: </h3>

      <form method="post" action="/post/{{$blogpost->id}}/comment">
        <div class="form-group">
          <label for="user_name">Name:</label>
          <input class="form-control" name="user_name" />
        </div>

        <div class="form-group">
          <label for="body">Comment:</label>
          <textarea name="body" class="form-control"> </textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info ">Add Comment</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

      </form>

  <hr>
  <h3>Comments</h3>
    <ul class="commentFlex">
      @foreach ($blogpost->comments->reverse() as $comment)
        <li class="comment">
          <p><b>{{$comment->user_name}}: </b>
          {{$comment->body}}
          </p>
        </li>
        <li class="commentDate">
          {{$comment->created_at->format('M d')}}
        </li>
      @endforeach
    </ul>
</div>
@stop


@section('sidebar')
  @include('blog.sidebar')
@stop
