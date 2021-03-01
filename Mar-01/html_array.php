<?php
$letters = ['a', 'b', 'c'];
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
  <div id="letters">
    <?php
    foreach($letters as $index=>$letter){
    ?>
      <div class="letter">
        ID <?= $index ?> Name <?= $letter ?>
      </div>
    <?php
    }
    ?>
  </div>
</body>
</html>