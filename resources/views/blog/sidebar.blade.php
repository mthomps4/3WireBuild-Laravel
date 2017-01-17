@include('blog.sidebarFunctions')

<div class="sidebarMobileFlex">
<div>
  <h4>Blog Archive</h4>
      @foreach ($posts_by_date as $date => $posts)
      <div class="btn-group">
        <button type="button" class="btn btn-info btn-Archive dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{$date}}<span class="caret"></span>
        </button>
      <ul class="dropdown-menu">
        @foreach ($posts as $post)
          <li><a class="dropdown-item" href="/post/{{$post->id}}">{{ $post->title }}</a></li>
        @endforeach
      </div>
      @endforeach
      <hr>
</div>

<div>
  <h4>Tags:</h4>
    <?php
      $tagList = getTags()
    ?>

    @foreach($tagList as $list)
      @foreach($list as $tag)
        <a href="/tag/{{$tag->id}}/posts/" role="presentation">
        <button class="btn btn-default  btn-sm" type="button">
        {{$tag->name}}   <span class="counterLabel"> ( {{getTagCount($tag->id)}}) </span>
        </button>
        </a>
      @endforeach
    @endforeach

    <hr />
</div>

<div>
  <h4>Categories:</h4>
    <?php
      $catList = getCategories()
    ?>
    @foreach($catList as $list)
      @foreach($list as $cat)
        <a href="/category/{{$cat->id}}/posts/" role="presentation">
        <button class="btn btn-default  btn-sm" type="button">
        {{$cat->name}}   <span class="counterLabel"> ( {{getCatCount($cat->id)}}) </span>
        </button>
        </a>
      @endforeach
    @endforeach

    <hr />
</div>

<div class="instagramWrap">
  <div class="">
    {{getInstagram()}}
  </div>
</div>


</div>
