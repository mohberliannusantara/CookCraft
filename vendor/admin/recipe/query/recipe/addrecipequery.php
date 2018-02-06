<?php
  include '../../../../connection.php';
  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $chef = $_POST['chef'];
  $deskripsi = $_POST['deskripsi'];
  // $gambar = $_POST['gambar'];
  $gambar = $_FILES['gambar']['name'];
  $alat = $_POST['alat'];
  $bahan = $_POST['bahan'];
  $prosedur = $_POST['prosedur'];
  $tglupload = date('Y-m-d');
  $kategori = $_POST['kategori'];
  //var_dump($_POST);
  move_uploaded_file($_FILES['gambar']['tmp_name'], '../../../../img/recipe/' . $_FILES['gambar']['name']);

  if ($_mysqli->query("INSERT INTO resep (id, judul, deskripsi, gambar, alat, bahan, prosedur, tglupload, idkategori, chef) VALUES ('$id', '$judul', '$deskripsi', '$gambar', '$alat', '$bahan', '$prosedur', '$tglupload', '$kategori', '$chef')")) {
    echo "Data uploaded!";
  }else{
    echo "Data can't uploaded!";
  }
 ?>
