<!-- <?php
  require("php/db_connect.php");
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>H4VPI | Registration</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/accordion/src/ziehharmonika.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NewBiz - v4.9.1
  * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style type="text/css">
    ul {
      list-style-image: url('assets/img/check.png');
    }

    li {
      font-size: 20px;
    }
    li::marker {
      font-size: 1.5rem; /* You can use px, but I think rem is more respecful */
    }

    #reg_div {
      width: 50%;
      margin-left: 25%;
      padding: 20px;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index#about">About</a></li>
          <li><a class="nav-link scrollto" href="#index#services">Services</a></li>
          <li><a class="nav-link scrollto " href="index#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="index#team">Team</a></li>
          <li class="dropdown"><a href="#" class="active"><span>Activities</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="volunteers.html" class="active">Volunteers</a></li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Become a volunteer</h2>
          <ol>
            <li><a href="index.html">Volunteer</a></li>
            <!-- <li>Inner Page</li> -->
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-4">
      <div class="container">

          <div id="reg_div">
            <form>
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="fname" class="form-control form-control-sm">                
              </div>

              <div class="form-group">
                <label>Surname</label>
                <input type="text" name="surname" class="form-control form-control-sm">                
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control form-control-sm">                
              </div>

              <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control form-control-sm">                
              </div>

              <select class="form-group">
                <label>Country of Origin</label>
                <select class="form-control">
                  
                </select>
                
              </select>

            </form>  

          </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>H4VPI</h3>
            <p>Heritage for Volumtary Partnership Initiatives (H4VPI) is a voluntary non-profit organization established with the sole aim of crating opportunities for the empowerment of the vulnerable in society and providing educatioal support to deprived children in rural commununities in Northern Ghana.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              P. O. Box E/R 266 <br>
              Tamale, Ghana<br>
              West Africa <br>
              <strong>Phone:</strong> 233(0) 242128046<br>
              <strong>Phone:</strong> 200 800240<br>
              <strong>Email:</strong> h4vpi.org@gmail.com<br>
              <strong>Email:</strong> paulanab.uds@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our Monthly Newsletter</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
      -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/accordion/src/ziehharmonika.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script type="text/javascript">
  $('.ziehharmonika').ziehharmonika();
</script>

</body>

</html>