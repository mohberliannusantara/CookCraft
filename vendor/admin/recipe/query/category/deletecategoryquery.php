<?php
  include '../../../../connection.php';
  $id = $_POST['id'];
  //var_dump($_POST);
  if ($_mysqli->query("DELETE FROM kategori WHERE idkategori='$id'")) {
    echo "Data has been deleted!";
  }
 ?>
