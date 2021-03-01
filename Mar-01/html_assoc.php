<?php
  $people = [
    ['id'=>'a1', 'name'=>'a', 'last_name'=>'aa'],
    ['id'=>'b2', 'name'=>'b', 'last_name'=>'bb'],
    ['id'=>'c3', 'name'=>'c', 'last_name'=>'cc']
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>Document</title>
</head>
<body>
  <div id="users">
    <?php
    foreach($people as $person){
    ?>
      <div class="person">
        <div>
          ID: <?= $person['id'] ?>
        </div>
        <div>
          Name: <?= $person['name'] ?>
        </div>
        <div>
          Last name: <?= $person['last_name'] ?>
        </div>
      </div>    
    <?php
    }
    ?>
  </div>
</body>
</html>