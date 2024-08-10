<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">


  <link rel="stylesheet" href="../css/new.css">


  <title>Document</title>
</head>
<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">OCRM</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="../Registration.php" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="../Userlogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

<h1>Welcome To OCRM</h1>
        <h2><b><marquee direction="left">Online Computer Repair Maintenance</marquee></b></h2>
        <a href="../Requester/Userlogin.php" class="btn btn-success mr-4" style="margin-left:45%;">Login</a>
      <a href="../Registration.php" class="btn btn-danger mr-4">Sign Up</a>
    
<div class="slider">
</div><br><br><br><br<br><br><br><br><br><br><br><br<br><br><br><br><br><br><br<br><br><br><br><br><br><br><br>

<div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">OCRM Services</h3>
      <p>
        It is a web based project that is developed to provide services, 
         to combine mechanical & technical skills to your computer in a good working state. 
         this project focus on enhancing user experience by offering world class computer Maintenance services.

        wide array of services.  Our sole mission is “To provide Electronic Appliances care
        services to
        keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped Electronic Appliances service centres and fully trained mechanics, we
        provide quality
        services with excellent packages that are designed to offer you great savings.

        Our state-of-art workshops are conveniently located in many cities across the country. Now you
        can book
        your service online by doing Registration.
     
      </p>

    </div>
  </div>
  <!--Introduction Section End-->

  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h3>Our Services</h3>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"> <img src="../images/a1.png"></a>
        <h4 class="mt-4">Electronic Appliances</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><img src="../images/b.png"></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><img src="../images/c.png"></a>
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div> <!-- End Services --><br><br>

   <!-- Start Registration  -->
   <?php include('Registration.php') ?>
  <!-- End Registration  -->

 <!-- Start Happy Customer  -->
 <div class="jumbotron bg-danger" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="customer">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white">Happy Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="../images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                ducimus voluptas
                nesciunt debitis numquam.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="../images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                ducimus voluptas
                nesciunt debitis numquam.</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="../images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                ducimus voluptas
                nesciunt debitis numquam.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="../images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                ducimus voluptas
                nesciunt debitis numquam.</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->


   <!--Start Contact Us-->
   <div class="contactUs" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

   <!--Start Contact Us Row-->
   <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->


      <div class="col-md-4 text-center" style="background-color:white;"> 
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        OCRM Pvt Ltd, <br>
        Sec IV, Bokaro <br>
        Jharkhand - 834005 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.ocms.com</a> <br>

        <br><br>
        <strong>Delhi Branch:</strong> <br>
        OCMS Pvt Ltd, <br>
        Ashok Nagar, Delhi <br>
        Delhi - 804002 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.ocms.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->
      

   <!-- Start Footer-->
   <footer class="Footer-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="footer">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Jagriti Kumari &copy; 2022.
          </small>
          <small class="ml-2"><a  href="../Admin/admin.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->


</body>
</html>