<?php

// require_once(__DIR__.'/router.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/router.php');

// ##################################################
get('/exit_return_break', function(){
  require_once("{$_SERVER['DOCUMENT_ROOT']}/exit_return_break.php");
});


// ##################################################
get('/posts', function(){
  // require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_posts.php');
  require_once("{$_SERVER['DOCUMENT_ROOT']}/views/view_posts.php");
});


// ##################################################
post('/posts/:id/:like_or_dislike', function($id, $like_or_dislike){
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


});



// ##################################################
any('/404', function(){
  echo 'Page not found';
});





