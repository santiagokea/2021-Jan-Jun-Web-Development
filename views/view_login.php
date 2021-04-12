<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_top.php');
?>


<form action="/login" method="POST" onsubmit="return validate()">
  <input type="text" placeholder="email"
    data-validate="email"
  >
  <input type="password" placeholder="password" maxlength="5"
    data-validate="str" data-min="2" data-max="5"
  >
  <button>
    login
  </button>
</form>



<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_bottom.php');
?>