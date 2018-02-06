<?php
  // include 'connection.php';
  $conn = new mysqli("localhost",'root','','cooking');
  $output = '';
  // $sql = "SELECT * FROM resep WHERE judul LIKE '%".$_POST['search']."%' OR chef LIKE '%".$_POST['search']."%' ";
  // $result = mysqli_query($conn, $sql);
  $qry = $conn->query("SELECT * FROM resep WHERE judul LIKE '%".$_POST['search']."%' OR chef LIKE '%".$_POST['search']."%'");
  if($qry->num_rows > 0){
    while($row = $query->fetch_assoc()){
      $output .= '
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <a href="recipeview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top" src="img/recipe/<?php echo $row['gambar'] ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="recipeview.php?id=<?php echo $row['id']; ?>"><?php echo $row['judul'] ?></a>
            </h4>
            <h5>By <?php echo $row['chef'] ?></h5>
            <p class="card-text"><?php echo $row['deskripsi'] ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
      ';
      echo $output;
    }
  }else {
    echo "Data Not Found";
  }
 ?>
