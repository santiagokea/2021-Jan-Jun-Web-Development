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



  // what is exit is the same as die, return, break?


});



// ##################################################
any('/404', function(){
  echo 'Page not found';
});





