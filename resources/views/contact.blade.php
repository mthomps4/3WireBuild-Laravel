@extends('layouts.main')
@section('mainContent')
  <h2 class="pageTitle">Contact Me<a href="mailto:matthew.thompson.a@gmail.com" target="_blank" class="aboutLinks"><img src="linkImages/Social/gmail.png" alt="Email Link"></a></h2>

  <div class="">
    <?php
      if (session()->has('data.name')){
        $name = session('data.name');
      }else{$name = "";}

      if (session()->has('data.email')){
        $email = session('data.email');
      }else{$email = "";}

      if (session()->has('data.message')){
        $message = session('data.message');
      }else{$message = "";}

     ?>


    <div id="form-messages1"></div>

    <div class="">
      @if(isset($success))
      <div id="form-messages" class="alert alert-success" role="alert">
        {{$success}}
      </div>
      @endif

      <form action="/sendEmail" method="post">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <input type="hidden" name="mailTo" value="matthew.thompson.a@gmail.com">

         <div class="row control-group">
           <div class="form-group col-xs-12">
             <label for="name">Name</label>
             <input type="text" class="form-control" id="name" name="name" value="{{$name}}"/>
           </div>
         </div>
         @if ($errors->name->first('name') != null)
           <div id="form-messages" class="alert alert-danger" role="alert">
             {{$errors->name->first('name')}}
           </div>
         @endif


         <div class="row control-group">
           <div class="form-group col-xs-12">
             <label for="email">Email Address</label>
             <input type="email" class="form-control" id="email" name="email"  value="{{$email}}"/>
           </div>
         </div>
         @if ($errors->name->first('email') != null)
           <div id="form-messages" class="alert alert-danger" role="alert">
             {{$errors->name->first('email')}}
           </div>
         @endif

         <div class="row control-group">
           <div class="form-group col-xs-12 controls">
             <label for="message">Message</label>
             <textarea rows="5" class="form-control" id="message" name="message">{{$message}}</textarea>
           </div>
         </div>
         @if ($errors->name->first('message') != null)
           <div id="form-messages" class="alert alert-danger" role="alert">
             {{$errors->name->first('message')}}
           </div>
         @endif

         <div class="row">
           <div class="form-group col-xs-12">
             <button type="submit" class="btn btn-primary">Send</button>
           </div>
         </div>

       </form>

    </div>
  </div>

@stop
