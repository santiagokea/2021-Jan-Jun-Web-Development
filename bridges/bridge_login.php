<?php
// TODO: validate user_email
// TODO: validate user_password
require_once(__DIR__.'/../db.php');
echo $_POST['user_email'];
echo $_POST['user_password'];
$q = $db->prepare('SELECT * FROM users WHERE email = :email ');
$q
// 10:40
// header('Location: /login');

