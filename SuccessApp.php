<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome StyleSheet  -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Lobster two font cdn  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap   -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="css/style.css">

    <title>About</title>
</head>



<body>

    <!-- navbar starts here  -->

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="index.html" class="navbar-brand">
            <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3 text-primary "></i>Kinder Garten</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="index.html" class="nav-item nav-link fs-5">Home</a>
                <a href="about.html" class="nav-item nav-link fs-5">About Us</a>
                <a href="classes.html" class="nav-item nav-link active fw-bold  fs-5">Classes</a>

                <a href="appointment.html" class="nav-item nav-link fs-5">Appointment</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle fs-5" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="facility.html" class="dropdown-item">School Facilities</a>
                        <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
            </div>
            <a href="call-to-action.html" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

    <!-- navbar ends here  -->

    <!-- hero section starts here  -->
    <div class="container-fluid hero-section overflow-hidden pb-5">
        <div class="row ">
            <div class="col-12" style="background-image: url(images/about-hero-section.jpg); ">
                <div class="bread-crumbs">
                    <p><a href="index.html">Home</a> / <a href="classes.html" class="text-primary">Classes</a> /</p>
                </div>
            </div>
        </div>
     <div class="row">
        <div class="col-12 d-flex justify-content-center  align-items-center">
            <div class="text-center " style="max-width: 600px;">
                <h1 class=" ">Response Submitted</h1>
                <p>Your Appointment Under Guardian <?php  echo $_SESSION["g_name"]; session_unset(); session_destroy();?> . We will Conatct You soon. </p>
            </div>
        </div>
     </div>

    
    </div>
    <!-- hero section ends here  -->




      <!-- Footer Start -->
      <div class="container-fluid bg-dark text-white-50 footer position-absolute p-3  ">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 quick-links">
                    <h3 class="text-white mb-4 font-curve">Get In Touch</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a href="" class="text-white-50">123
                            Street, New York, USA</a></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:+92 3254740211"
                            class="text-white-50">+92 3254740211</a></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:kinderGarten@gmail.com"
                            class="text-white-50">kinderGarten@gmail.com</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 quick-links">
                    <h3 class="text-white mb-4 font-curve">Quick Links</h3>
                    <div>
                        <a class="btn btn-link text-white-50" href="index.html">Home</a>
                    </div>
                    <div>
                        <a class="btn btn-link text-white-50" href="about.html">About Us</a>
                    </div>
                    <div>
                        <a class="btn btn-link text-white-50" href="facility.html">Our Facilities</a>
                    </div>
                    <div>
                        <a class="btn btn-link text-white-50" href="call-to-action.html">Join Our Community</a>
                    </div>
                   
                    
                    
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-white mb-4 font-curve">Photo Gallery</h3>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="images/classes-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="images/classes-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="images/classes-6.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container end-container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center mb-2">
                        &copy; <a class="border-bottom" href="#">Kinder Garten</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center ">
                        <div class="footer-menu">
                            <a href="index.html">Home</a>
                            <a href="classes.html">Classes</a>
                        
                            <a href="appointment.html">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>