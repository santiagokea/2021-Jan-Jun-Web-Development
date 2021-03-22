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

// http_response_code(200) // Default for php
