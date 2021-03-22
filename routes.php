<?php

// require_once(__DIR__.'/router.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/router.php');

// ##################################################
get('/mykea', function(){
  $data = file_get_contents('https://kea.dk/');
  $data = str_replace('Er du studerende på KEA?', 'Get a MAX BOOK PRO for only 1.000. Mobile pay to', $data);
  echo $data;
});

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
  require_once("{$_SERVER['DOCUMENT_ROOT']}/apis/api_posts_like_or_dislike.php");
});



// ##################################################
any('/404', function(){
  echo 'Page not found';
});





