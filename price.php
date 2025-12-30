<?php require "./header.php" ?>
<style>
    * {
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background: #f7f7f7;
        margin: 0;
    }

    .container {
        max-width: 1200px;
        margin: auto;
        display: flex;
        gap: 20px;
        padding: 20px;
    }

    /* CỘT TRÁI */
    .main-content {
        flex: 3;
    }

    .post {
        display: flex;
        gap: 15px;
        background: #fff;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .post img {
        width: 260px;
        height: 160px;
        object-fit: cover;
        border-radius: 6px;
    }

    .post-info h3 {
        color: #1e40af;
        margin: 0 0 8px;
        font-size: 18px;
    }

    .post-info p {
        color: #555;
        font-size: 14px;
    }

    .meta {
        display: flex;
        justify-content: space-between;
        font-size: 13px;
        margin-top: 10px;
    }

    .author {
        color: orange;
    }

    /* CỘT PHẢI */
    .sidebar {
        flex: 1;
    }

    .sidebar h2 {
        margin-bottom: 15px;
    }

    .service {
        background: #fff;
        border-radius: 8px;
        margin-bottom: 15px;
        overflow: hidden;
    }

    .service img {
        width: 100%;
        height: 160px;
        object-fit: cover;
    }

    .service p {
        padding: 10px;
        font-weight: bold;
        color: #1e40af;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        .post {
            flex-direction: column;
        }

        .post img {
            width: 100%;
            height: auto;
        }
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include "./container_header.php" ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-4 px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-hospital fs-1 me-3"></i>BV Mắt Hoa Lư</h1>
        </a>
        <div class="d-none d-lg-flex w-25">
            <a href="https://themewagon.com/themes/plasery" class="btn btn-light px-3">Download Now</a>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light py-3 py-lg-0 px-3">
                <a href="index.php" class="nav-item nav-link ">Trang Chủ</a>
                <a href="about.php" class="nav-item nav-link">Giới Thiệu</a>
                <a href="service.php" class="nav-item nav-link">Dịch Vụ</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Thông Tin</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="appointment.php" class="dropdown-item">Đặt Lịch Hẹn</a>
                        <a href="team.php" class="dropdown-item">Bác Sĩ</a>
                        <a href="price.php" class="dropdown-item active">Bảng Giá</a>
                        <a href="404.php" class="dropdown-item">Quản lý chất lượng</a>
                    </div>
                </div>
                <a href="service.php" class="nav-item nav-link">Tin Tức</a>
                <a href="contact.php" class="nav-item nav-link">Liên Hệ</a>
            </div>
        </div>
        <div class="d-none d-lg-block w-25 text-end">
            <a href="#" class="btn btn-light px-3">Đặt Lịch Hẹn</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 mb-3">Bảng Giá Dịch Vụ</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-inline-flex justify-content-start bg-white px-4 py-2 mb-0">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bảng Giá Dịch Vụ</li>
                </ol>
            </nav>
        </div> 
    </div>
    <!-- Page Header End -->

    <div class="container">
        <!-- CỘT TRÁI -->
        <div class="main-content">

            <div class="post">
                <img src="https://via.placeholder.com/260x160" alt="">
                <div class="post-info">
                    <h3>Chăm sóc đôi mắt học đường – Ươm mầm tương lai</h3>
                    <p>Trong bối cảnh tỷ lệ tật khúc xạ học đường ngày càng gia tăng...</p>
                    <div class="meta">
                        <span class="author">benhvienmathoalu</span>
                        <span class="date"> Ngày 24/12/2025</span>
                    </div>
                </div>
            </div>

            <div class="post">
                <img src="https://via.placeholder.com/260x160" alt="">
                <div class="post-info">
                    <h3>HOẠT ĐỘNG TRI ÂN Ý NGHĨA CỦA BỆNH VIỆN MẮT HOA LƯ</h3>
                    <p>Chia sẻ kiến thức, tư vấn và thăm khám mắt cho thương bệnh binh...</p>
                    <div class="meta">
                        <span class="author">benhvienmathoalu</span>
                        <span class="date"> Ngày 23/12/2025</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- CỘT PHẢI -->
        <aside class="sidebar">
            <h2>Dịch vụ</h2>

            <div class="service">
                <img src="https://via.placeholder.com/300x180" alt="">
                <p>Phẫu thuật Phaco</p>
            </div>

            <div class="service">
                <img src="https://via.placeholder.com/300x180" alt="">
                <p>Quản lý chất lượng</p>
            </div>

            <div class="service">
                <img src="https://via.placeholder.com/300x180" alt="">
                <p>Phẫu thuật thẩm mỹ mắt</p>
            </div>
        </aside>
    </div>




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
    <?php include "./footer.php" ?>
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