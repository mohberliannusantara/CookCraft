<?php
  include '../../../../connection.php';
  $id = $_POST['idkategori'];
  $judul = $_POST['namakategori'];
  if ($_mysqli->query("INSERT INTO kategori (idkategori, namakategori) VALUES ('$id', '$judul')")) {
    echo "Data uploaded!";
  }else{
    echo "Data can't uploaded!";
  }
 ?>
