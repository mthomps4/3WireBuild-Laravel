@extends('layouts.main')

@section('mainContent')
  <div class="mainblogContent col-md-9">
    @yield('blogContent')
  </div>


  <div class="sidebarContent col-md-3">
    @yield('sidebar')
  </div>
@stop
