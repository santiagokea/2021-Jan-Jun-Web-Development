<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<body>

  <h1>
    <?php 
      session_start();
      echo "Hi {$_SESSION['email']}";
    ?>
  </h1>

  <a href="/logout">logout</a>
  
</body>
</html>