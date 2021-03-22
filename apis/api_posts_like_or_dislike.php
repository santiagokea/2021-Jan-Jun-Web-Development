<?php

if( ! ctype_digit($id) ){
  http_response_code(400);
  echo 'Invalid id';
  exit(); // die()
}
if( $like_or_dislike != 0 && $like_or_dislike != 1 ){
  http_response_code(400);
  echo 'Invalid like or dislike';
  exit();
}

if( $like_or_dislike == 0){
  // UPDATE posts SET likes = likes +1 WHERE post_id = 1
  $number = file_get_contents("{$_SERVER['DOCUMENT_ROOT']}/db/dislikes.txt"); // read the content of the file
  $number = $number+1;
  // write back to the file. Second argument is the data to be written
  file_put_contents("{$_SERVER['DOCUMENT_ROOT']}/db/dislikes.txt", $number);
  echo $number;
  exit();
}


// http_response_code(200) // Default for php
