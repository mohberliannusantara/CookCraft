<?php
  include '../../../../connection.php';
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $gambar = $_FILES['gambar']['name'];
  //$gambar = $_POST['gambar'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $role = $_POST['role'];


  move_uploaded_file($_FILES['gambar']['tmp_name'], '../../../../img/user/' . $_FILES['gambar']['name']);

  if ($_mysqli->query("INSERT INTO user (id, username, password, nama, gambar, role, email) VALUES ('$id', '$username', '$password', '$nama', '$gambar', '$role', '$email')")) {
    echo "Data uploaded!";
  }else{
    echo "Data can't uploaded!";
  }
 ?>
