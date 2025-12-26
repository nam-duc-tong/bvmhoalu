<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body {
                background: #111;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .swiper {
                width: 80%;
                height: 300px;
            }

            .swiper-slide {
                background: #a884d8;
                width: 200px;
                height: 260px;
                border-radius: 12px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 32px;
                color: #222;
            }

    </style>
</head>
<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <div class="swiper coverflow">
        <div class="swiper-wrapper">
            <div class="swiper-slide">1</div>
            <div class="swiper-slide">2</div>
            <div class="swiper-slide">3</div>
            <div class="swiper-slide">4</div>
            <div class="swiper-slide">5</div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    new Swiper(".coverflow", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 150,
            modifier: 1,
            slideShadows: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });

</script>
</body>
</html>