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

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Cook<b>Craft</b></a>
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

    <section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/1900x1200_img_background.jpg); background-attachment: fixed;" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-end">
          <div class="col-md-6  order-md-1">

            <h2 class="heading mb-3">COOKCRAFT</h2>
            <div class="sub-heading"><p class="mb-5">BEST RECIPES FROM THE EXPERTS CHEF</p>
						<?php if (isset($_SESSION['login'])) { ?>
            	<p><a href="vendor/index.php" role="button" class="btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-0 pb_letter-spacing-2">VIEW MORE RECIPES</a></p>
						<?php } else { ?>
							<p><a href="#section-contact" role="button" class="btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-0 pb_letter-spacing-2">VIEW MORE RECIPES</a></p>
						<?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

		<section class="pb_section" data-section="why-us" id="section-why-us">
			<div class="container">
				<div class="row justify-content-md-center text-center mb-5">
					<div class="col-lg-7">
						<h2 class="mt-0 heading-border-top font-weight-normal">What We do</h2>
						<p>We are provides cooking recipes from best chefts in the world. In the website there are various facilities that can help you to start cooking. facilities on this website include the list of recipe categories.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- END section -->

		<div class="multiple-items pb_slide_v1">
				<div>
					<?php if (isset($_SESSION['login'])) { ?>
					<a href="vendor/index.php" class="link-block">
						<img src="assets/images/3.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Bulgogi</h2>
							<p>Read More</p>
						</div>
					</a>
					<?php } else { ?>
						<a href="#section-contact" class="link-block smoothscroll ">
							<img src="assets/images/3.jpg" alt="" class="img-fluid">
							<div class="slide-text">
								<h2>Bulgogi</h2>
								<p>Read More</p>
							</div>
						</a>
					<?php } ?>
				</div>
				<div>
					<?php if (isset($_SESSION['login'])) { ?>
					<a href="vendor/index.php" class="link-block">
						<img src="assets/images/5.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Lasagna</h2>
							<span>Read More</span>
						</div>
					</a>
				<?php } else { ?>
					<a href="#section-contact" class="link-block smoothscroll ">
						<img src="assets/images/5.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Lasagna</h2>
							<span>Read More</span>
						</div>
					</a>
					<?php } ?>
				</div>
				<div>
					<?php if (isset($_SESSION['login'])) { ?>
					<a href="vendor/index.php" class="link-block">
						<img src="assets/images/7.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Beef Roasts</h2>
							<span>Read More</span>
						</div>
					</a>
				<?php } else { ?>
					<a href="#section-contact" class="link-block smoothscroll ">
						<img src="assets/images/7.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Beef Roasts</h2>
							<span>Read More</span>
						</div>
					</a>
					<?php } ?>
				</div>
				<div>
					<?php if (isset($_SESSION['login'])) { ?>
					<a href="vendor/index.php" class="link-block">
						<img src="assets/images/11.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Steak</h2>
							<span>Read More</span>
						</div>
					</a>
					<?php } else { ?>
						<a href="#section-contact" class="link-block smoothscroll ">
							<img src="assets/images/11.jpg" alt="" class="img-fluid">
							<div class="slide-text">
								<h2>Steak</h2>
								<span>Read More</span>
							</div>
						</a>
					<?php } ?>
				</div>
				<div>
					<?php if (isset($_SESSION['login'])) { ?>
					<a href="vendor/index.php" class="link-block">
						<img src="assets/images/6.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Ramen</h2>
							<span>Read More</span>
						</div>
					</a>
				<?php } else { ?>
					<a href="#section-contact" class="link-block smoothscroll ">
						<img src="assets/images/6.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Ramen</h2>
							<span>Read More</span>
						</div>
					</a>
				<?php } ?>
				</div>
				<div>
					<?php if (isset($_SESSION['login'])) { ?>
					<a href="vendor/index.php" class="link-block">
						<img src="assets/images/17.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Shrimp oyster sauce</h2>
							<span>Read More</span>
						</div>
					</a>
				<?php } else { ?>
					<a href="#section-contact" class="link-block smoothscroll ">
						<img src="assets/images/17.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Shrimp oyster sauce</h2>
							<span>Read More</span>
						</div>
					</a>
				<?php } ?>
				</div>
				<div>
					<?php if (isset($_SESSION['login'])) { ?>
					<a href="vendor/index.php" class="link-block">
						<img src="assets/images/16.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Yellow Cake</h2>
							<span>Read More</span>
						</div>
					</a>
				<?php } else { ?>
					<a href="#section-contact" class="link-block smoothscroll ">
						<img src="assets/images/16.jpg" alt="" class="img-fluid">
						<div class="slide-text">
							<h2>Yellow Cake</h2>
							<span>Read More</span>
						</div>
					</a>
				<?php } ?>
				</div>
			</div>
		<!-- END slide -->

		<section class="pb_section pb_testimonial_v1" data-section="testimonials" id="section-testimonials">
			<div class="container">
				<div class="row justify-content-md-center text-center mb-5">
					<div class="col-lg-7">
						<h2 class="mt-0 heading-border-top font-weight-normal">Happy Customers</h2>
						<p>Customer delight is about creating an individual experiece for every customer to enhance the relationship with CookCraft</p>
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-md-10 col-sm-12 mb-5">
						<div class="single-item-no-arrow pb_slide_v1">
							<div>
								<div class="media">
									<img class="d-flex img-fluid rounded-circle mb-sm-5" src="assets/images/3.jpg" alt="Generic placeholder image">
									<div class="media-body pl-md-5 pl-sm-0">
										<blockquote>
											<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&rdquo;</p>
											<p class="pb_author"><cite class="text-uppercase">John Smith</cite> Designer</p>
										</blockquote>
									</div>
								</div>
							</div>
							<div>
								<div class="media">
									<img class="d-flex img-fluid rounded-circle mb-sm-5" src="assets/images/7.jpg" alt="Generic placeholder image">
									<div class="media-body pl-md-5 pl-sm-0">
										<blockquote>
											<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&rdquo;</p>
											<p class="pb_author"><cite class="text-uppercase">John Smith</cite> Designer</p>
										</blockquote>
									</div>
								</div>
							</div>
							<div>
								<div class="media">
									<img class="d-flex img-fluid rounded-circle mb-sm-5" src="assets/images/15.jpg" alt="Generic placeholder image">
									<div class="media-body pl-md-5 pl-sm-0">
										<blockquote>
											<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&rdquo;</p>
											<p class="pb_author"><cite class="text-uppercase">John Smith</cite> Designer</p>
										</blockquote>
									</div>
								</div>
							</div>
							<div>
								<div class="media">
									<img class="d-flex img-fluid rounded-circle mb-sm-5" src="assets/images/2.jpg" alt="Generic placeholder image">
									<div class="media-body pl-md-5 pl-sm-0">
										<blockquote>
											<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&rdquo;</p>
											<p class="pb_author"><cite class="text-uppercase">John Smith</cite> Designer</p>
										</blockquote>
									</div>
								</div>
							</div>
							<div>
								<div class="media">
									<img class="d-flex img-fluid rounded-circle mb-sm-5" src="assets/images/6.jpg" alt="Generic placeholder image">
									<div class="media-body pl-md-5 pl-sm-0">
										<blockquote>
											<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&rdquo;</p>
											<p class="pb_author"><cite class="text-uppercase">John Smith</cite> Designer</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END section -->

		<section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/800x500_img_4.jpg); background-attachment: fixed;">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-md-12">
            <h2 class="heading mb-3">CookCraft</h2>
						<?php if (isset($_SESSION['login'])) { ?>
							<p class="sub-heading mb-5 pb_color-light-opacity-8">Welcome to CookCraft, enjoy recipes from top chefs here.</p>
            	<p><a href="vendor/index.php" role="button" class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2">Show Recipes</a></p>
						<?php } else { ?>
							<p class="sub-heading mb-5 pb_color-light-opacity-8">Find and get your favorite recipes in here.</p>
							<p><a href="#section-contact" role="button" class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2">Get Started</a></p>
						<?php } ?>
					</div>
        </div>

      </div>
    </section>
    <!-- END section -->

    <section class="pb_section" data-section="contact" id="section-contact">
      <div class="container">

        <div class="row justify-content-md-center text-center mb-5">
          <div class="col-lg-7">
            <h2 class="mt-0 heading-border-top font-weight-normal">Get In Touch</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, </p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-8 pr-md-5 pr-sm-0 mb-4">
					<?php
					$user = '';
					// $_SESSION['login']['username']= array( $_SESSION['username'] => $user);
					// $user = $_SESSION['login']['username'];
					if (isset($_SESSION['login'])) { ?>
						<h1>Hello! <?php echo $user ?></h1>
					<?php } else { ?>
						<!-- Form Login -->
							<form method="post" action="vendor/processlogin.php">
	              <div class="row">
	                <div class="col-md">
	                  <div class="form-group">
	                    <label for="name">Userame</label>
	                    <input type="text" name="username" class="form-control p-3 rounded-0">
	                  </div>
	                </div>
	                <div class="col-md">
	                  <div class="form-group">
	                    <label for="email">Password</label>
	                    <input type="password" name="password" class="form-control p-3 rounded-0">
	                  </div>
	                </div>
	              </div>
	              <!-- <div class="form-group">
	                <label for="message">Message</label>
	                <textarea cols="30" rows="10" class="form-control p-3 rounded-0" id="message"></textarea>
	              </div> -->
	              <div class="form-group">
	                <input type="submit" name="login" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2 p-3 rounded-0" value="Login">
	              </div>
								<br>
								<p class="message">Not registered? <a href="#" data-toggle="modal" data-target="#Modal" >Create an account</a></p>
	            </form>
						<!-- End form Login -->
					<?php } ?>
          </div>

					<!-- Form Modal register-->
					<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
									<form method="post" id="formTambah" action="vendor/register.php">
									  <div class="row">
									    <div class="col-md">
									      <div class="form-group">
									        <label for="name">Name</label>
									        <input type="text" class="form-control p-3 rounded-0" id="name" name="name">
									      </div>
									    </div>
									    <div class="col-md">
									      <div class="form-group">
									        <label for="email">Password</label>
									        <input type="password" class="form-control p-3 rounded-0" id="password" name="password">
									      </div>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="email">Email</label>
									    <input type="text" class="form-control p-3 rounded-0" id="email" name="email">
									  </div>

					      </div>
					      <div class="modal-footer">
										<input type="submit" class="btn pb_outline-dark pb_font-13 pb_letter-spacing-2 p-3 rounded-0" value="Create" name="create">
					      </div>
								</form>
					    </div>
					  </div>
					</div>
					<!-- End Form Modal register -->
          <div class="col-md-4">
            <ul class="pb_contact_details_v1">
              <li>
                <span class="text-uppercase">Email</span>
                liannusantara1158@gmail.com
              </li>
              <li>
                <span class="text-uppercase">Phone</span>
                +62 823 2458 8523
              </li>
              <!-- <li>
                <span class="text-uppercase">Fax</span>
                +62 823 2458 8523
              </li> -->
              <li>
                <span class="text-uppercase">Address</span>
                Malang, Indonesia <br>
                Polytechnic State Of Malang  <br>
                Sukarno Hatta street, No. 09
              </li>
            </ul>
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
            <p class="pb_font-14">&copy; 2017 <a href="https://cookcraft.atwebpages.com/">CookCraft</a>. Designed by <a rel="nofollow" href="https://www.instagram.com/moh_berlian_nusantara/" target="_blank">Moh. Berlian Nusantara</a>
        <br/> Distributed by <a href="https://cookcraft.atwebpages.com" target="_blank">CookCraft</a> <!--Demo Images: <a rel="nofollow" href="https://unsplash.com/" target="_blank">Unsplash</a></p> -->
          </div>
        </div>
      </div>
    </footer>
		<!-- <script type="text/javascript">
			function recipeView() {
				$.ajax({
          url:'vendor/index.php',
          method: 'post',
          data:null
        }).done(function(data) {
          $('#content').html(data);
        });
			}
		</script> -->
    <!-- loader -->

    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F"/></svg></div>


    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/main.js"></script>
	</body>
</html>
