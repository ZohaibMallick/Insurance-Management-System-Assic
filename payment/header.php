<?php

if (!isset($_SESSION['SESS_NAME']) || $_SESSION['SESS_NAME'] == '')
  header('location: ../index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AstroFuture - Know Your Future</title>
	 <link rel="icon" href="../images/logo.jpg" type="image/x-icon">
	 <script type="text/javascript" src="../assets/bootstrap.bundle.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="../assets/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="../css/syle.css">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-size: 20px;" href="#">AstroFuture</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item hover-white">
          <a class="nav-link  navcolor" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navcolor" href="kundli.php">Kundli Matching</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navcolor" href="kundli.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navcolor" href="kundli.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navcolor" href="kundli.php">Talk to Astrologer</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Horoscopes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="h_2024.php">Horoscope 2024</a></li>
            <li><a class="dropdown-item" href="h_2023.php">Horoscope 2023</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="th.php">Today's Horoscope</a></li>
            <li><a class="dropdown-item" href="tm.php">Tomorrow Horoscope</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex" style="margin-top: 7px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav me-auto mb-4 mb-lg-0" >&nbsp;&nbsp;&nbsp;
      	<a href="profile.php" class="btn btn-danger me-6" style="text-transform: uppercase;"> Hello  <?php   echo $_SESSION['SESS_NAME'];  ?>  </a>&nbsp;
        <a href="../pages/logout.php" class="nav-link navcolor"> Logout  </a>
      </ul>
    </div>
  </div>
</nav>
	
