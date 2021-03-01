<?php
  // ini_set('display_errors', 0);
  // require require_once include include_one
  // require -> must be there or stop the page
  // require_once -> use it only 1 time
  // include -> nice it tries to use it
  // include_one -> 1 time
$page_title = 'Welcome : : Welcome'; 
require_once(__DIR__.'/top.php');
?>

<main>
  <h1>Welcome</h1>
</main>


<?php
require_once(__DIR__.'/bottom.php');
?>