@extends('layouts.main')
@section('mainContent')
  <h2 class="pageTitle">Contact</h2>

  <div class="Contact">
    <div class="contactWrap">
      <a href="mailto:matthew.thompson.a@gmail.com?subject=3WireBuild-Contact" target="_blank">
        <img class="contactIcon" src="linkImages/Social/gmail.png">
    		<p class="contactDesc"><b>Email: </b>matthew.thompson.a@gmail.com</p>
      </a>
    </div>

    <div class="contactWrap">
      <a href="https://github.com/mthomps4" target="_blank">
    		<img class="contactIcon" src="linkImages/Social/github.png">
    		<p class="contactDesc"><b>GitHub:</b>@MThomps4</p>
      </a>
    </div>

    <div class="contactWrap">
      <a href="https://www.linkedin.com/in/mthomps4" target="_blank">
        <img class="contactIcon" src="linkImages/Social/linkedin.png">
    		<p class="contactDesc"><b>LinkedIn:</b> /in/mthomps4</p>
      </a>
    </div>

    <div class="contactWrap">
      <a href="https://www.instagram.com/3wirebuild/" target="_blank">
        <img class="contactIcon" src="linkImages/Social/instagram.png">
    		<p class="contactDesc"><b>Instagram:</b>@3WireBuild</p>
      </a>
    </div>
  </div>

<hr>

  <div class="">
    <div class="">
      <img class="profile" src="/linkImages/img/profile.jpg" />
    </div>


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
