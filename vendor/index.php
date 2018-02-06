<?php
	session_start();
	if (!isset($_SESSION['login'])){
		header("Location:../index.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>CookCraft &mdash; Best Recipe Cooking for you</title>
		<meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/slick-theme.css">

    <!-- <link rel="stylesheet" href="../assets/css/helpers.css"> -->
    <link rel="stylesheet" href="css/style.css">
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="../index.php">Cook<b>Craft</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-testimonials">Recipes</a></li>
						<?php if (isset($_SESSION['login'])){ ?>
            	<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
						<?php } else { ?>
							<li class="nav-item"><a class="nav-link" href="#section-contact">Login</a></li>
						<?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END section -->

    <!-- Header with Background Image -->
    <header class="business-header pb_cover_v1 cover-bg-black cover-bg-opacity-4">
      <div class="container">
				<h2 class="heading mb-3" style="color: white;">COOKCRAFT</h2>
        <form action="index.php" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="search.." name="search" id="search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
              	<img src="img/search.png" alt="">
							</button>
            </div>
          </div>
        </form>
      </div>
    </header>

		<section class="pb_section pb_testimonial_v1" data-section="testimonials" id="section-testimonials">
			<div class="container">
        <div class="col-lg-12">
          <div class="row">
						<div class="result">

						</div>
						<?php
						include 'connection.php';
						if (isset($_POST['search'])) {
							$searchq = $_POST['search'];
							$searchq = preg_replace("#[^0-9a-z]#i","", $searchq);

							$sql = "SELECT * FROM resep WHERE judul LIKE '%$searchq%' OR chef LIKE '%$searchq%'";
							$query = $_mysqli->query($sql);
							if ($query == 0) {
								$output = 'There was no search result!';
							}else {
								while ($row = $query->fetch_assoc()) {?>
									<div class="col-lg-3 col-md-6 mb-4">
		                <div class="card h-100">
		                  <a href="recipeview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top" src="img/recipe/<?php echo $row['gambar'] ?>" alt=""></a>
		                  <div class="card-body">
		                    <h4 class="card-title">
		                      <a href="recipeview.php?id=<?php echo $row['id']; ?>"><?php echo $row['judul'] ?></a>
		                    </h4>
		                    <h6>By Chef <?php echo $row['chef'] ?></h6>
		                  </div>
		                  <div class="card-footer">
		                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
		                  </div>
		                </div>
		              </div>
								<?php
								}
							}
						}else {
							$sql = "SELECT * FROM resep";
	            $query = $_mysqli->query($sql);
	            while($row = $query->fetch_assoc()){?>
	              <div class="col-lg-3 col-md-6 mb-4">
	                <div class="card h-100">
	                  <a href="recipeview.php?id=<?php echo $row['id']; ?>"><img class="card-img-top" src="img/recipe/<?php echo $row['gambar'] ?>" alt=""></a>
	                  <div class="card-body">
	                    <h4 class="card-title">
	                      <a href="recipeview.php?id=<?php echo $row['id']; ?>"><?php echo $row['judul'] ?></a>
	                    </h4>
	                    <h6>By Chef <?php echo $row['chef'] ?></h6>
	                  </div>
	                  <div class="card-footer">
	                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
	                  </div>
	                </div>
	              </div>
	            <?php } ?>
						<?php } ?>
            </div>
          </div>
          <!-- /.row -->
        </div>
			</div>
		</section>
		<!-- END section -->

    <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a target="blank" href="https://www.facebook.com/mohberlian.nusantara" class="p-2"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a target="blank" href="https://twitter.com/lian_nusantara" class="p-2"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a target="blank" href="https://github.com/mohberliannusantara" class="p-2"><i class="fa fa-github-square"></i></a></li>
              <li class="list-inline-item"><a target="blank" href="https://www.linkedin.com/in/moh-berlian-nusantara-487623145/" class="p-2"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; 2017 <a href="https://cookcraft.atwebpages.com">CookCraft</a>. Designed by <a rel="nofollow" href="https://www.instagram.com/moh_berlian_nusantara/" target="_blank">Moh. Berlian Nusantara</a>
        <br/> Distributed by <a href="https://cookcraft.atwebpages.com" target="_blank">CookCraft</a> <!--Demo Images: <a rel="nofollow" href="https://unsplash.com/" target="_blank">Unsplash</a></p> -->
          </div>
        </div>
      </div>
    </footer>
		<!-- <script type="text/javascript">
			$(document).ready(function () {
				$('#search').keyup(function () {
					var txt = $(this).val();
					if (txt != '') {
						$.ajax({
							method: "post",
							url:"fetch.php",
							data:{search:txt},
							dataType:"text",
							success:function(data){
								$('#result').html(data);
							}
						});
					}else {
						$('#result').html('');
						// $.ajax({
						// 	method: "post",
						// 	url:"fetch.php",
						// 	data:{search:txt},
						// 	dataType:"text",
						// 	success:function(data){
						// 		$('#result').html(data);
						// 	}
						// });
					}
				});
			});
		</script> -->
    <!-- loader -->

    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F"/></svg></div>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> -->
    <script src="../assets/js/jquery.min.js"></script>

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>

    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>

    <script src="../assets/js/main.js"></script>

	</body>
</html>
