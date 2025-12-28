<?php require "./header.php"?>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


     <!-- Topbar Start -->
  <?php include "./container_header.php"?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-4 px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-hospital fs-1 me-3"></i>Plasery</h1>
        </a>
        <div class="d-none d-lg-flex w-25">
            <a href="https://themewagon.com/themes/plasery" class="btn btn-light px-3">Download Now</a>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light py-3 py-lg-0 px-3">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="service.php" class="nav-item nav-link">Our Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="appointment.php" class="dropdown-item">Appointment</a>
                        <a href="team.php" class="dropdown-item">Team Members</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="404.php" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link active">Contact Us</a>
            </div>
        </div>
        <div class="d-none d-lg-block w-25 text-end">
            <a href="#" class="btn btn-light px-3">Make Appointment</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 mb-3">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-inline-flex justify-content-start bg-white px-4 py-2 mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Get In Touch Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h4 class="mb-0">Call Us</h4>
                        </div>
                        <span class="fs-5">+0123456789</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-calendar-alt text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h4 class="mb-0">Mail Us</h4>
                        </div>
                        <span class="fs-5">info@domain.com</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-user text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h4 class="mb-0">Chat With Us</h4>
                        </div>
                        <a class="btn btn-sm btn-outline-primary px-3" href="#!">Let's Chat <i
                                class="fa fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h4 class=" mb-0">Address</h4>
                        </div>
                        <span class="fs-5">123 Street, New York, USA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">If You Have Any Query, Please Contact Us</h1>
                    <h4 class="lh-base mb-4">Receive messages instantly with our PHP and Ajax contact form - available
                        in the <a href="https://htmlcodex.com/downloading/?item=3621">Pro Version</a> only.</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Instagram Start -->
    <!-- <div class="container-fluid position-relative instagram p-0 mt-5">
        <a href="#!"
            class="d-flex align-items-center justify-content-center position-absolute top-50 start-50 translate-middle bg-white"
            style="width: 100px; height: 100px; z-index: 1;">
            <i class="fab fa-instagram fa-2x text-primary"></i>
        </a>
        <div class="row g-0">
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid w-100" src="img/instagram-1.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.2s">
                <img class="img-fluid w-100" src="img/instagram-2.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid w-100" src="img/instagram-3.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.4s">
                <img class="img-fluid w-100" src="img/instagram-4.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.5s">
                <img class="img-fluid w-100" src="img/instagram-5.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.6s">
                <img class="img-fluid w-100" src="img/instagram-6.jpg" alt="">
            </div>
        </div>
    </div> -->
    <!-- Instagram End -->


    <!-- Footer Start -->
     <?php include "./footer.php"?> 
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>