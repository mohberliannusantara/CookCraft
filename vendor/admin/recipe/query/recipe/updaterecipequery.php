<?php
  include '../../../../connection.php';
  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $chef = $_POST['chef'];
  $deskripsi = $_POST['deskripsi'];
  // $gambar = $_FILES['gambar']['name'];
  // $gambar = $_POST['gambar'];
  $alat = $_POST['alat'];
  $bahan = $_POST['bahan'];
  $prosedur = $_POST['prosedur'];
  $tglupload = date('Y-m-d');
  $kategori = $_POST['kategori'];
  //var_dump($_POST);
  // move_uploaded_file($_FILES['gambar']['tmp_name'], '../../../../img/recipe/' . $_FILES['gambar']['name']);

  if ($_mysqli->query("UPDATE resep SET id='$id', judul='$judul',deskripsi='$deskripsi',alat='$alat',bahan='$bahan',prosedur='$prosedur',tglupload='$tglupload',idkategori='$kategori', chef='$chef' WHERE id='$id'")) {
    echo "Data has been updated!";
  }else{
    echo "Data can't uploaded!";
  }
 ?>
