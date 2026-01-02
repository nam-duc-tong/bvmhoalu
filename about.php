<?php
require "./header.php";
include "./admin/login.php";
?>

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
           <div class="navbar-nav mx-auto py-3 py-lg-0 px-3" style="background-color: #f2f5fb !important;">
                <a href="index.php" class="nav-item nav-link">Trang chủ</a>
                <a href="about.php" class="nav-item nav-link active">Giới thiệu</a>
                <a href="service.php" class="nav-item nav-link">Dịch Vụ</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Thông Tin</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="appointment.php" class="dropdown-item">Tin Tức</a>
                        <a href="team.php" class="dropdown-item">Bác Sĩ</a>
                        <a href="testimonial.php" class="dropdown-item">Bảng Giá</a>
                        <a href="404.php" class="dropdown-item">Quản lý chất lượng</a>
                    </div>
                </div>
                <a href="service.php" class="nav-item nav-link">Tin Tức</a>
                <a href="contact.php" class="nav-item nav-link">Liên Hệ</a>
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
            <h1 class="display-3 mb-3">Giới thiệu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-inline-flex justify-content-start bg-white px-4 py-2 mb-0">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute" src="img/logo.jpg" alt=""
                            style="object-fit: cover;     
                            width: 58%;
                                height: 80%;
                                margin-left: 65px;">
                        <div class="position-absolute top-0 end-0 bg-white ps-3 pb-3"
                            style="width: 200px; height: 200px;">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white mb-0" data-toggle="counter-up">5</h1>
                                <h3 style="color: #fff;">Năm</h3>
                                <h6 class="mb-0" style="color: #fff;">Kinh Nghiệm</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-5 mb-5">BỆNH VIỆN MẮT HOA LƯ</h1>
                        <p class="fs-4 text-primary mb-4">Bệnh Viện chuyên khoa công nghệ cao về mắt theo tiêu chuẩn quốc tế đầu tiên tại Ninh Bình</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-light text-primary me-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x"></i>
                                    </div>
                                    <h5 class="mb-0">Đội ngũ Bác Sĩ hàng đầu</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-light text-primary me-3"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-syringe fa-2x"></i>
                                    </div>
                                    <h5 class="mb-0">Dịch vụ uy tín chất lượng cao</h5>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">Với hệ thống trang thiết bị theo tiêu chuẩn quốc tế, đội ngũ bác sĩ nhãn khoa có nhiều năm kinh nghiệm được tu nghiệp tại Mỹ
                            cùng dịch vụ y tế hoàn hảo sẽ giúp người dân có cơ hộ tiếp cận với công nghệ điều trị hiện đại, chất lượng cao và chi phí hợp lý nhất.</p>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 me-3" src="img/profile.jpg" alt="">
                                <h5 class="mb-0" style="color: #fff;">Liên hệ chúng tôi: 0878.135.135</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


   <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Đội ngũ Bác Sĩ của Chúng Tôi</h1>
            </div>
            <div class="row g-4">
                <?php
                $sql = "select * from nhanvien";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/bs/<?php echo $row['img_nv']?>" alt="">
                            </div>
                            <div class="team-text text-center px-4">
                                <h4>BS. <?php echo $row['tennhanvien']; ?></h4>
                                <span><?php echo $row['chucvu']; ?></span>
                            </div>
                            <div class="team-text-overflow text-center bg-light p-4">
                                <h4>BS. <?php echo $row['tennhanvien']; ?></h4>
                                <p><?php echo $row['chucvu']; ?></p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="#!"><i
                                            class="fab fa-x-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="#!"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="#!"><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href="#!"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Facts Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-12 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-4 mb-lg-0">Thông tin quan trọng</h1>
                </div>
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-calendar-alt text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h1 class="display-4 mb-0" data-toggle="counter-up">5</h1>
                        </div>
                        <span class="fs-5">năm kinh nghiệm</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-user text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h1 class="display-4 mb-0" data-toggle="counter-up">6</h1>
                        </div>
                        <span class="fs-5">Bác sĩ phẫu thuật</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-light h-100 p-4">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <i class="fa fa-arrow-right text-primary ms-n1 me-2"></i>
                            <h1 class="display-4 mb-0" data-toggle="counter-up">10000</h1>
                        </div>
                        <span class="fs-5">Phản hồi tích cực</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->



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