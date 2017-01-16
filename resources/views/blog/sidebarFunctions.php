<?php
function getTagCount($id){
  $tagsByBlog = DB::table('blogpost_tag')->get();
  $count = $tagsByBlog->where('tag_id', $id)->count();

  if($count=0){
    DB::table('tags')->where('id', $id)->delete();
  }

  return $tagsByBlog->where('tag_id', $id)->count();
}

function getCatCount($id){
  $catByBlog = DB::table('blogpost_category')->get();
  $count = $catByBlog->where('category_id', $id)->count();

  if($count=0){
    DB::table('category')->where('id', $id)->delete();
  }

  return $catByBlog->where('category_id', $id)->count();
}

function getTags(){
  $tagsById = DB::table('blogpost_tag')->select('tag_id')->get();
   $tagIdList = array();
   $newTagList = array();

  foreach($tagsById as $tag => $id){
    array_push($tagIdList, $id->tag_id);
  }

  $TagIds = array_unique($tagIdList);

  foreach($TagIds as $TagId){
      $tag = DB::table('tags')->where('id', $TagId)->get();
      array_push($newTagList, $tag);
  }
   return $newTagList;
}

function getCategories(){
  $catById = DB::table('blogpost_category')->select('category_id')->get();
   $catIdList = array();
   $newCatList = array();

  foreach($catById as $cat => $id){
    array_push($catIdList, $id->category_id);
  }

  $CatIds = array_unique($catIdList);

  foreach($CatIds as $CatId){
      $cat = DB::table('categories')->where('id', $CatId)->get();
      array_push($newCatList, $cat);
  }
   return $newCatList;
}
 ?>
