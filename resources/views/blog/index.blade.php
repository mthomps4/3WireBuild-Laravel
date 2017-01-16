@extends('layouts.blog')
@section('blogContent')
  <h1 class="pageTitle"> Blog Posts
    @if(isset($tagName))
      <br /><span class='filteredBy'>Filtered By: #{{$tagName}}</span>
    @endif
    @if(isset($categoryName))
      <br /><span class='filteredBy'>Filtered By: {{$categoryName}}</span>
    @endif
  </h1>
  <hr>

  @foreach($posts as $post)
      <div class="blogpostWrap">
      <img src="{{$post->imageURL}}" alt="Featured Image" class="postFeaturedImage">
      <div class="blogDescWrap">
        <div>
            <h1> <a href="/post/{{$post->id}}">{{$post->title}} </a></h1>

            <p>
              {{str_limit($post->body, 80)}}<br />
              <a href="/post/{{$post->id}}">Read More ...</a>
            </p>

            <p class="blogDescDate">
              {{$post->created_at->format('F d Y')}}<br />
              By: {{$post->author}}
            </p>

          </div>
          <div class="blogCatList">
            @foreach($post->categories as $category)
              <a href="/category/{{$category->id}}/posts/"><span class="label label-info catBadge">{!! $category->name !!}</span></a>
            @endforeach
          </div>

          <div class="blogTagList">
            @foreach($post->tags as $tag)
              <a href="/tag/{{$tag->id}}/posts/"><span class="label label-default tagBadge">#{!! $tag->name !!}</span></a>
            @endforeach
          </div>
      </div>

      </div>
      <hr>
  @endforeach
@stop

@section('sidebar')
  @include('blog.sidebar')
@stop
