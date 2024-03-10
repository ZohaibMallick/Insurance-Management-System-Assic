<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Insruance Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet"> 
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container" >
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.php"><span>Insurance Bazar</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active text-white" href="index.php">Home</a></li>
            <li><a class="nav-link scrollto text-white" href="index.php?#about">About</a></li>
            <li><a class="nav-link scrollto text-white" href="index.php?#services">Services</a></li>
            
            <li><a class="nav-link scrollto text-white" href="index.php?#team">Team</a></li>
            <li class="dropdown text-white"><a href="#"><span class="text-white">Renew Your Policy</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="login.php">Health Insurance</a></li>
                
                <li><a href="login.php">Bike Insurance</a></li>
                <li><a href="#">Travel Insruance</a></li>
                <li><a href="#">Car Insurance</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto text-white" href="index.php?#contact">Contact</a></li>
            <li><a class="getstarted scrollto text-white" href="account.php">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

      </div>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Add or Manage your account</h1>
      <h2>Apply policy online </h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>

  <main id="main" class="bg-light">

 
    
    <div class="container-fluid">
    <div class="row d-flex justify-content-center" style="margin-top: 20px;">
      <div class="col-lg-4">
        <div class="card" >
          <div class="card-body">
            <h6 class="d-flex justify-content-center">Login Here</h6><br>
            <form action="login.php" method="POST">
              <label class="container-fluid">Enter the username</label><br><br>
              <input type="text" name="uname" class="form-control"><br>
               <label class="container-fluid"l>Enter the password</label><br><br>
              <input type="password" name="password" class="form-control"><br>
              <a href="forgot.php" class="container-fluid" style="text-decoration: none;">forgot password ?</a><br><br>
              <input type="submit" name="submit" class="btn btn-warning form-control">
            </form>
          </div>
        </div>
         <br><br>
      </div>
      <div class="col-lg-4">
       
        <div class="card" >
          <div class="card-body">
            <h6 class="d-flex justify-content-center">Register Here</h6><br>
            <form action="register.php" method="POST">
              <label class="container-fluid">Enter the username</label><br>
              <input type="text" name="uname" class="form-control" required><br>
               <label class="container-fluid"l>Enter the password</label><br>
              <input type="password" name="password" class="form-control" required><br>
               <label class="container-fluid"l>Re-Enter the password</label><br>
              <input type="password" name="repassword" class="form-control" required><br>
               
              <label class="container-fluid">Enter the phone number</label><br>
              <input type="number" name="phoneno" class="form-control" required>
              
              <br>
              <input type="submit" name="submit" class="btn btn-warning form-control">
            </form>
          </div>
        </div>
      </div>
    </div>
</div><br>
  </main>
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Insurance Bazar</h3>
            <p>
              HSR Layout  <br>
              Bangalore, BNY 560068<br>
              India <br><br>
              <strong>Phone: 663244422</strong> <br>
              <strong>Email:</strong><a href="tel:123-456-7890" class="cta-btn">123-456-7890</a><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bike Insurance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Car Insurance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Travel Insurance</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#">Health Insurance</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Further more updates subscribe our newsletter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Insurance Bazar</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          
          Designed by <a href="index.php">Kavya Gowda</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>