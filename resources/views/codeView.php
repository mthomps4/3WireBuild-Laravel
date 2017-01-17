<?php
  function getInstagram(){

  $InstaRequest = 'https://api.instagram.com/v1/users/921849005/media/recent/?access_token=921849005.073c48e.25d712cc8d934f4b933821948f1f6d6e';
  $getRequest = file_get_contents($InstaRequest);
  $json = json_decode($getRequest, true);

  foreach($json['data'] as $post){
    echo $post['images']['low_resolution']['url'];
    echo $post['caption']['text'];
    echo $post['caption']['created_time'];
    echo "<br /><br /><br />";
  }

}

  $array = getInstagram();


    //echo "<pre>" . var_dump($array) ."</pre>";

    foreach($array['data'] as $value){
      echo $value['images']['low_resolution']['url'];
      echo $value['caption']['text'];
      echo $value['caption']['created_time'];
      echo "<br /><br /><br />";
    }

//link -> string
// tags -> array
// created_time -> date string
//$value['images']['low_resolution']['url']
//caption [created_time] -- [text]

//tags type created_time link images caption id user


 ?>
