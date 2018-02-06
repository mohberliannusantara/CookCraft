<?php
  session_start();
  include '../connection.php';
  if (!isset($_SESSION['login'])) {
    header('location:../../index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Resume</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/devicons.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">CookCraft</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" onclick="openContent('recipe/index')">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" onclick="openContent('recipe/showuser')">User</a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" onclick="openContent('recipe/showrecipe')">Recipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#" onclick="openContent('recipe/showcategory')">Category</a>
          </li >
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../../index.php">VIEW DASHBOARD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../logout.php" >Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
<div class="" id="content">
</div>
    </div>
    <script type="text/javascript">
      function openContent(target) {
        $.ajax({
          url:target+'.php',
          method: 'post',
          data:null
        }).done(function(data) {
          $('#content').html(data);
        });
      }
    </script>
    <!-- Bootstrap core JavaScript -->

    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>
    <script type="text/javascript" src='js/admin.js'></script>
  </body>
</html>
