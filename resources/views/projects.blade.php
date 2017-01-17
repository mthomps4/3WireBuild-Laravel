@extends('layouts.main')
@section('mainContent')
  <h2 class="pageTitle">Projects</h2>
  <div id="Projects">

  <div class="HighlightContainer">

    <div class="project">
        <img class="projectImg" src="https://github.com/mthomps4/3WireCMS/blob/master/codesnips/3WireCMS-BlogPost.PNG?raw=true" alt="3WireCMS Blog Image"/>
        <div class="projectBox">
          <div class="codeButtons">
            <a href="https://github.com/mthomps4/3WireCMS" target="_blank" class="TheCode">The Code </a>
            <a href="/blog" class="Demo">Demo</a>
          </div>
          <p class="projectTitle">3WireCMS</p>
          <p class="projectLang">PHP, MySQL, Laravel, Eloquent</p>
            <p class="projectDesc">Simple Blogging CMS built in Laravel. See a live example here <a href="/blog" style="color:#00BCD4;">@3WireBuild!</a></p>
          </div>
      </div>


      <div class="project">
          <img class="projectImg" src="linkImages/img/Bourbon.JPG" alt=""/>
          <div class="projectBox">
            <div class="codeButtons">
              <a href="https://github.com/mthomps4/KocherasBourbonTrail" target="_blank" class="TheCode">The Code </a>
              <a href="http://www.bourbon.3wirebuild.com" target="_blank" class="Demo">Demo </a>
            </div>
            <p class="projectTitle">Bourbon Trail Portfolio App</p>
            <p class="projectLang">PHP, MySQL, Sessions </p>
              <p class="projectDesc">A bourbon portfolio application to track bourbons tasted, ranking and review date. Demo created from Seth Kochera's personal portfolio of over 300 Bourbons!</p>
            </div>
        </div>

        <div class="project">
          <img class="projectImg" src="linkImages/img/3wirechat.PNG" alt=""/>
          <div class="projectBox">
            <div class="codeButtons">
              <a href="https://github.com/mthomps4/3WireChatApp" target="_blank" class="TheCode">The Code </a>
              <a href="http://www.chat.3wirebuild.com" target="_blank" class="Demo">Demo </a>
            </div>
            <p class="projectTitle">3WireChat</p>
            <p class="projectLang">NodeJS, Websockets, Passport Local </p>
            <p class="projectDesc">Collaborative web app to Chat, Layout(Draw), and Estimate board-feet for woodworking projects.</p>
          </div>
        </div>

        <div class="project">
            <img class="projectImg" src="linkImages/img/FurnArchive.JPG" alt=""/>
            <div class="projectBox">
              <div class="codeButtons">
                <a href="https://github.com/mthomps4/FurnitureDesignArchive" target="_blank" class="TheCode">The Code </a>
                <span class="DemoX">Demo </span>
              </div>
                <p class="projectTitle">Furniture Design Archive</p>
                <p class="projectLang">C#, ASP.MVC, Entity Frameworks</p>
                <p class="projectDesc">Furniture Portfolio Archive for past and future builds. Keeps track of Furniture Piece, Parts, Notes, Board Feet and more. </p>
              </div>
          </div>

    </div>

    <p class="projectGithubText">To check out more code and future projects you can follow me below @Mthomps4 on Github.</p>
    <a href="https://github.com/mthomps4/" target="_blank" class="aboutGithubLink projectGithubFollow"></a>
    <p class="githubTag">GitHub</p>
  </div>
  </div>

@stop
