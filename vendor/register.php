<?php
session_start();
include'connection.php';
if (isset($_POST['create'])) {
  $name = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $insert = $_mysqli->query("INSERT INTO user(username, password, role, email) VALUES ('$name', '$password', 'user', '$email')");
    $_SESSION['login']= array(
      'username' => $name,
      'role' => 'user'
    );
    header("location:../index.php");
}
?>
