<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_top.php');
?>


<form action="/login" method="POST" onsubmit="return validate()">
  <input type="text" placeholder="email"
    data-validate="email"
  >
  <input type="password" placeholder="password">
  <button>
    login
  </button>
</form>



<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_bottom.php');
?>