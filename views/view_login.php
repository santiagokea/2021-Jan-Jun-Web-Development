<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_top.php');
?>


<form action="/login" method="POST">
  <input type="text" placeholder="email">
  <input type="password" placeholder="password">
  <button>
    login
  </button>
</form>



<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_bottom.php');
?>