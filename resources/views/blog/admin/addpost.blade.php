@extends('layouts.app')

@section('content')
<div class="container">

<h1> New Blog Post </h1>
    <form method="post" action="/storeNewPost">
      <div class="form-group">
        <label for="title"> Title: </label>
        <input name="title" class="form-control" />
      </div>

      <div class="form-group">
        <label for="body"> Body: </label>
        <textarea name="body" class="form-control" rows="20"> </textarea>
      </div>

      <div class="form-group">
        <label for="author"> Author: </label>
        <input name="author" class="form-control" value="{{Auth::user()->name}}"/>
      </div>

      <div class="form-group">
        <label for="imageURL"> Featured Image URL: </label>
        <p class="help-block">Enter full image url</p>
        <input name="imageURL" class="form-control" value="https://unsplash.it/300/?random"/>
      </div>

      <div class="form-group">
        <label for="tags"> Tags: </label>
        <p class="help-block">Seperate Tags by '#'</p>
        <input name="tags" class="form-control" placeholder="#somethingAwesome #somethingCool" />
      </div>

      <div class="form-group">
        <label for="categories"> Categories: </label>
        <p class="help-block">Seperate Categories by '#'</p>
        <input name="categories" class="form-control" placeholder="#Topic1 #Field2" />
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Blog Post</button>
      </div>

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

    <div style="margin-bottom:2em;">
      <a href="/dashboard"><button type="button" class="btn btn-default">Nevermind...</button></a>
    </div>

  </div>
  @stop
