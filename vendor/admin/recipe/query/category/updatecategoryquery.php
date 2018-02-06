<?php
  include '../../../../connection.php';
  $id = $_POST['id'];
  $judul = $_POST['namakategori'];
  if ($_mysqli->query("UPDATE kategori SET idkategori='$id', namakategori='$judul' WHERE idkategori='$id'")) {
    echo "Data has been updated!";
  }else{
    echo "Data can't uploaded!";
  }
 ?>
