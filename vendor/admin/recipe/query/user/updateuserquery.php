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
  // var_dump($_POST);
  move_uploaded_file($_FILES['gambar']['tmp_name'], '../../../../img/user/' . $_FILES['gambar']['name']);

  if ($_mysqli->query("UPDATE user SET id='$id', username='$username', password='$password', nama='$nama', gambar='$gambar', role='$role' WHERE id='$id'")) {
    echo "Data has been updated!";
  }else{
    echo "Data can't uploaded!";
  }
 ?>
