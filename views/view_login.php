<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
  if( isset($display_error) ){
  ?>
    <div>
      ERROR <?= $display_error ?>
    </div>
  <?php
  }
  ?>

  <form action="/login" method="POST">
    <input name="user_email" type="text" placeholder="email">
    <button>login</button>
  </form>
</body>
</html>