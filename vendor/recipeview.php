<?php
	session_start();
	if (!isset($_SESSION['login'])){
		header("Location:../index.php");
	}
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
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

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar" id="pb-navbar" style="padding: 0em 0; background-color: #232428;">
      <div class="container">
        <a class="navbar-brand" href="../index.php">Cook<b>Craft</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation" style="color: #000000">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar" style="color: #000000">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php" style="color: #000000">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php" >Recipes</a></li>
						<?php if (isset($_SESSION['login'])){ ?>
            	<li class="nav-item" style="color: #000000"><a class="nav-link" href="logout.php" style="color: #000000">Logout</a></li>
						<?php } else { ?>
							<li class="nav-item" style="color: #000000"><a class="nav-link" href="#section-contact" style="color: #000000">Login</a></li>
						<?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END section -->

		<?php
		include 'connection.php';
		$query = $_mysqli->query("SELECT * FROM resep WHERE id = '$id'");
		$row = $query->fetch_assoc();
		?>
		<section class="pb_section pb_testimonial_v1" data-section="testimonials" id="section-testimonials" style="padding: 5em 0;">
		  <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <img class="img-fluid d-block" src="img/recipe/<?php echo $row['gambar'] ?>">
            </div>
            <div class="col-md-4">
							<h2>Title</h2>
							<p><?php echo $row['judul'] ?> by <?php echo $row['chef'] ?></p>
							<h4>Description</h4>
							<p><?php echo $row['deskripsi'] ?></p>
							<h4>Equipment</h4>
							<p><?php echo $row['alat'] ?></p>
							<h4>Ingredients</h4>
							<p><?php echo $row['bahan'] ?></p>
							<h4>Procedure</h4>
							<p><?php echo $row['prosedur'] ?></p>
							<br>
							<h6>Information</h6>
							<p>Uploaded by CookCraft <?php echo $row['tglupload'] ?></p>
						</div>
          </div>
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
<?php } ?>
