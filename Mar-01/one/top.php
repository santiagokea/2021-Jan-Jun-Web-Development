<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>
    <?= $top_page_title ?>
  </title>
</head>
<body>

  <nav>
    <a href="index.php" class="<?php if($top_active=='index'){ echo 'active'; } ?>">index</a>
    <a href="about-us.php" class="<?php if($top_active=='about'){ echo 'active'; } ?>">about us</a>
    <a href="contact-us.php" class="<?php if($top_active=='contact-us-now'){ echo 'active'; } ?>">contact us</a>
  </nav>