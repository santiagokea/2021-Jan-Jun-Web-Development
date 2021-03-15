<?php
// TODO: validate user_email
// TODO: validate user_password
require_once(__DIR__.'/../db.php');

try{
  // echo $_POST['user_email'];
  // echo $_POST['user_password'];
  $q = $db->prepare('SELECT * FROM users WHERE email = :email ');
  // $q = $q->bindValue(':email', $_POST['user_email']);
  // $q->execute();
  // $user = $q->fetchAll();
  // echo json_encode($user);
  // 10:40
  // header('Location: /login');
}catch(PDOException $ex){
  echo $ex;
}





