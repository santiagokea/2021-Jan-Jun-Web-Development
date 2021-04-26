<?php

// Validate
if( ! isset($_POST['search_for']) ){
  http_response_code(400);
  exit();
}
if( strlen($_POST['search_for']) < 2 ){
  http_response_code(400);
  exit();
}
if( strlen($_POST['search_for']) > 20 ){
  http_response_code(400);
  exit();
}


