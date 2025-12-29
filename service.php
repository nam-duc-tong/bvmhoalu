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
        <!-- <div class="d-none d-lg-flex w-25">
            <a href="https://themewagon.com/themes/plasery" class="btn btn-light px-3">Download Now</a>
        </div> -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-3 py-lg-0 px-3" style="background-color: #f2f5fb !important;">
                <a href="index.php" class="nav-item nav-link ">Trang Chủ</a>
                <a href="about.php" class="nav-item nav-link">Giới Thiệu</a>
                <a href="service.php" class="nav-item nav-link active">Dịch Vụ</a>
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
        <!-- <div class="d-none d-lg-block w-25 text-end">
            <a href="#" class="btn btn-light px-3">Make Appointment</a>
        </div> -->
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 mb-3">Dịch Vụ</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-inline-flex justify-content-start bg-white px-4 py-2 mb-0">
                    <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dịch Vụ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


   <!-- Service Start -->
    <div class="container-fluid bg-light py-5 mt-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="display-5 mb-5">Khám phá phương pháp phẫu thuật và điều trị của chúng tôi</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.1s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-1.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Khám phá tổng quan và chuyên sâu</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.3s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-2.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Phẫu thuật phaco điều trị đục thủy tinh thể</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.5s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-3.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Phẫu thuật dịch kính võng mạc</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.1s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-4.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Phẫu thuật thẩm mỹ mắt</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.3s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-5.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Chẩn đoán theo dõi và điều trị bệnh lý về đáy mắt</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp height-fit" data-wow-delay="0.5s">
                    <div class="service-item bg-white h-100 p-4">
                        <div class="d-flex ms-n4 mb-4">
                            <div class="service-icon flex-shrink-0 bg-light me-4">
                                <img class="img-fluid" src="img/icon-6.png" alt="">
                            </div>
                            <div class="service-text">
                                <h5>Các bệnh khác về mắt</h5>
                                <a class="btn btn-sm btn-outline-primary px-3 mt-auto" href="#!">Đọc Thêm <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="overflow-hidden">
                            <img class="img-fluid service-img w-100" src="img/1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Phản Hồi từ Khách Hàng</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block wow fadeIn" data-wow-delay="0.5s">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">“Sau điều trị, thị lực của tôi cải thiện rõ rệt. Cảm ơn đội ngũ bác sĩ
                                rất tận tâm.”
                            </p>
                            <h4>Nguyễn Văn A</h4>
                            <span>Bệnh Nhân</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">“Tôi thật sự yên tâm khi khám và điều trị tại Bệnh Viện Mắt Hoa Lư.”
                            </p>
                            <h4>Lê Thị B</h4>
                            <span>Bệnh Nhân</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="img/testimonial-3.jpg" alt="">
                            <p class="fs-5">“Từ ngày mổ mắt xong, cuộc sống của tôi thay đổi tích cực hơn rất
                                nhiều.”
                            </p>
                            <h4>Tống Thị C</h4>
                            <span>Bệnh Nhân</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block wow fadeIn" data-wow-delay="0.5s">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Đặt Lịch Hẹn</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.2s">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select class="form-select" style="height: 55px;">

                                    <option selected>Chọn loại Dịch Vụ</option>
                                     <?php
                                        $sql = "select * from dichvu";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value=" . $row['id_dv'] . ">" . $row['tendichvu'] . "</option>";
                                        }
                                        ?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select" style="height: 55px;">
                                    <option selected>Chọn Bác Sĩ</option>
                                      <?php
                                            $sql = "select * from nhanvien";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value= Bác Sĩ " . $row['id_nv'] . ">" . $row['tennhanvien'] . "</option>";
                                            }
                                        ?>
                                    <!-- <option value="1">Doctor 1</option>
                                    <option value="2">Doctor 2</option>
                                    <option value="3">Doctor 3</option> -->
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" placeholder="Họ Và Tên" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Ngày Hẹn" data-target="#date1" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Vào Lúc" data-target="#time1" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit">Đặt Lịch Hẹn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


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