<?php

// require_once(__DIR__.'/router.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/router.php');

// ##################################################
get('/posts', function(){
  // require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_posts.php');
  require_once("{$_SERVER['DOCUMENT_ROOT']}/views/view_posts.php");
});


// ##################################################
post('/posts/:id/:like_or_dislike', function($id, $like_or_dislike){
  echo "The user $like_or_dislike post with id $id";
});



// ##################################################
any('/404', function(){
  echo 'Page not found';
});





