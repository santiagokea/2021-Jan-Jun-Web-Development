<?php
  $users = [];
  $user_one = new stdClass();
  $user_one->id = 1;
  $user_one->name = 'a';
  array_push($users, $user_one);
  // [  {"id":1, "name":"a"} ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?= $users[0]->name ?>
  </div>
</body>
</html>