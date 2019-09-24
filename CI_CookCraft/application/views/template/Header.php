<?php
	session_start();
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

  
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick-theme.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/helpers.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>index.php">Cook<b>Craft</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-why-us">About</a></li>
						
            <?php if (isset($_SESSION['login'])){ ?>
            	<li class="nav-item"><a class="nav-link" href="vendor/index.php" >Recipe</a></li>
						<?php } else { ?>
							<li class="nav-item"><a class="nav-link" href="#section-contact">Recipe</a></li>
						<?php } ?>
            <li class="nav-item"><a class="nav-link" href="#section-testimonials">Testimonials</a></li>
						
            <?php if (isset($_SESSION['login'])){ ?>
            	<li class="nav-item"><a class="nav-link" href="vendor/logout.php">Logout</a></li>
						<?php } else { ?>
							<li class="nav-item"><a class="nav-link" href="#section-contact">Login</a></li>
						<?php } ?>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->