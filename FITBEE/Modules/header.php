<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'dbconnect.php' ?>
   <title> FitBee </title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="asset/icofont/icofont.min.css"/>
   <link rel="icon" href="asset/images/favicon.ico">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!--for animations -->
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Quicksand&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@500&family=Indie+Flower&display=swap" rel="stylesheet">

<!--- colorcodes : 1- green 2-blue 3-orange 4-red -->
<style type="text/css">
	body{ font-family: 'Nunito Sans', sans-serif; }
	h1,h2,h3,h4,h5{font-family: 'Quicksand', sans-serif;  }
	:root{ --themeColor1:#86CA2D; --themeColor2:#1CC3CB; --themeColor3:#f59031; --themeColor4:#e74c3c;}

    .logof2{ font-family: 'Indie Flower', cursive;} 

 
</style>
  </head>
<body>
 <div class="row">
 	<div class="col-md-3 text-center pt-3"><a href="index.php" style="text-decoration:none;color:black;"> <h4 class="logof2"><strong>F I T B E E</strong></h4></a>
 		<h6> Health Guide </h6>  </div>
 	<div class="col-md-9">
 		<div class="container-fluid text-white" style="background-color: var(--themeColor1)">
 		<div class="row ">
 		<div class="col pt-2 pb-1"> <h5 class="pl-4 text-capitalize"> Stay fit and healthy </h5></div>
          <div class="col ml-auto"></div> 
          <i class="icofont-instagram mr-3 pt-3"></i> <i class="icofont-facebook mr-3 pt-3"></i>
          <i class="icofont-linkedin mr-3 pt-3"></i><i class="icofont icofont-twitter mr-3 pt-3"></i>
        <i class="icofont icofont-pinterest mr-5 pt-3"></i></div>
      </div>
           
 		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link text-dark" href="dietPlan.php">Diet Plans</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Workout
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="workout.php">Training</a>
           <a class="dropdown-item" href="blog.php?category=Exercise and Fitness">Fitness Tips</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Health Tools
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="bmi.php">BMI</a>
          <a class="dropdown-item" href="bmr.php">BMR</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Blogs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <?php 
    $result=$conn->query("select * from category");
    while($row=$result->fetch_assoc()){
      $category=urlencode($row['category']);
         echo"<a class='dropdown-item' href='blog.php?category=".$category."'> ".$row['category']." </a>"; }  ?>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recipe Guide
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="recipe.php">Recipe Search</a>
          <a class="dropdown-item" href="food.php">Food Nutrition Info</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          News
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="news.php">Health News</a>
          <a class="dropdown-item" href="covidnews.php">Coronavirus News</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="faq.php">FAQ</a>
      </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Videos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <?php 
    $result=$conn->query("select * from category");
    while($row=$result->fetch_assoc()){
      $category=urlencode($row['category']);
         echo"<a class='dropdown-item' href='videos.php?category=".$category."'> ".$row['category']." </a>"; }  ?>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="contact.php">Contact</a>
      </li>
     </ul>
  
      	<div class="navbar-nav ml-auto ">
          <?php if(!isset($_SESSION['uid'])){ ?>
          <a class="btn text-light" href="login.php" style="background-color: var(--themeColor2);">My Account</a> 
        <?php } else {     ?>
          <a class="btn text-light" href="user/account.php" style="background-color: var(--themeColor2);">My Account</a>  
        <?php } ?>
    </div>  
  </div>
</nav>
 </div>
 </div>
 
