@extends('layouts.app')
@section('content')

<h1 class="pageTitle">Delete Post?</h1>
<div class="container">
    <h3 class="pageTitle"> Are you sure you wante to delete this post?<br />It will be gone forever.</h3>


    <h4> {{$blogpost->title}}</h4>
    <p>
      {{$blogpost->body}}
    </p>

    <form class="" action="/burn" method="post">

      <div class="form-group">
        <button type="submit" class="btn btn-danger">Destroy Post!</button>
      </div>

      <input type="hidden" name="blogpostID" value="{{$blogpost->id}}">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

    <button type="button" class="btn btn-default"><a href="/dashboard">No, Take Me Back!</a></button>

</div>
@stop
