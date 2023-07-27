<?php 
session_start(); 
if(!isset($_SESSION['ad'])){
echo "<script>window.location='../adminlogin.php'</script>";
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include '../dbconnect.php' ?>
   <title> Fitbee </title>
      <link rel="stylesheet" href="../asset/css/bootstrap.min.css" crossorigin="anonymous">
      <link rel="icon" href="../asset/images/favicon.ico">

      <link href="../asset/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="../asset/icofont/icofont.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Quicksand&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@500&family=Indie+Flower&display=swap" rel="stylesheet">

<!--- colorcodes : 1- green 2-blue 3-orange 4-red -->
<style type="text/css">
	body{ font-family: 'Nunito Sans', sans-serif; }
	h1,h2,h3,h4,h5{font-family: 'Quicksand', sans-serif;  }
	:root{ --themeColor1:#86CA2D; --themeColor2:#1CC3CB; --themeColor3:#f59031; --themeColor4:#e74c3c;}
	.logof1{ font-family: 'Antonio', sans-serif;}
    .logof2{ font-family: 'Indie Flower', cursive; }
    .bg{background-color: var(--themeColor2); color: white;}
</style>
  </head>
<body>
  <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="../asset/images/sidebar-5.jpg">
                    <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="../index.php" class="simple-text">
                       FITBEE
                    </a>
                </div>
                <!--- side bar -->
                <ul class="nav">
                    <li>
                        <a class="nav-link active" href="dashboard.php">
                            <i class="icofont-dashboard-web"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                     <li>
                        <a class="nav-link" href="./category.php">
                            <i class="icofont-paper"></i>
                            <p>Category</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./dietplans.php">
                            <i class="icofont-fruits"></i>
                            <p>Diet Plans</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./allarticle.php">
                            <i class="icofont-page"></i>
                            <p>Articles & Tips </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./allworkouts.php">
                            <i class="icofont-dumbbell"></i>
                            <p>Workouts </p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./faq.php">
                            <i class="icofont-question-circle"></i>
                            <p>FAQ</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./video.php">
                            <i class="icofont-video-alt"></i>
                            <p>Videos</p>
                        </a>
                    </li>
                   
                    <li>
                        <a class="nav-link" href="./regusers.php">
                            <i class="icofont-users"></i>
                            <p>Reg Users</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./reviews.php">
                            <i class="icofont-comment"></i>
                            <p>User Reviews</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="logout.php">
                            <i class="icofont-logout"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" href="#pablo"> Admin Panel </a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="allmsg.php">
                            <span class="no-icon">Messages</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="no-icon">Add Content</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="article.php">Article</a>
                            <a class="dropdown-item" href="diet.php">Diet Plan</a>
                            <a class="dropdown-item" href="workout.php">Exercise</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <span class="no-icon">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">