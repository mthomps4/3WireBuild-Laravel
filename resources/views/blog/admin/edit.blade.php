@extends('layouts.app')
@section('content')

<div class="container">

<h1> Edit Post </h1>
    <form method="post" action="/updatePost">
      <div class="form-group">
        <label for="title"> Title: </label>
        <input name="title" class="form-control" value="{{$blogpost->title}}"/>
      </div>

      <div class="form-group">
        <label for="body"> Body: </label>
        <textarea name="body" class="form-control" rows="20">
          {!! html_entity_decode($blogpost->body) !!}
        </textarea>
      </div>

      <div class="form-group">
        <label for="author"> Author: </label>
        <input name="author" class="form-control" value="{{$blogpost->author}}"/>
      </div>

      <div class="form-group">
        <label for="imageURL"> Featured Image URL: </label>
        <p class="help-block">Enter full image url</p>
        <input name="imageURL" class="form-control" value="{{$blogpost->imageURL}}"/>
      </div>


        <?php
          $tagList = "";
          $catList = "";
          foreach($blogpost->tags as $tag){
              $temp = "#" . $tag->name . " ";
              $tagList .= $temp;
          }
          foreach($blogpost->categories as $category){
            $temp = "#" . $category->name . " ";
            $catList .= $temp;
          }
        ?>

      <div class="form-group">
        <label for="tags"> Tags: </label>
        <p class="help-block">Seperate Tags by '#'</p>
        <input name="tags" class="form-control" value="{{$tagList}}" />
      </div>

      <div class="form-group">
        <label for="categories"> Categories: </label>
        <p class="help-block">Seperate Categories by '#'</p>
        <input name="categories" class="form-control" value="{{$catList}}" />
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Save Edits</button>
      </div>

      <input type="hidden" name="blogpostID" value="{{$blogpost->id}}">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
<div style="margin-bottom:2em;">
  <a href="/dashboard"><button type="button" class="btn btn-default">Oops! Wrong One!</button></a>
</div>


  </div>
  @stop
