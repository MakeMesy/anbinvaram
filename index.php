
<?php
$page_title = "Anbin Varam";
$page_description = "";
$page_url = "https://www.anbinvaram.com/";
$page_image = "./assets/img/main/logo.webp";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./resource/seo.php') ?>

    <!-- cdns -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>



    <!-- css -->
    <link rel="stylesheet" href="./assets/css/home/style.css">
</head>

<body>

    <?php include('./resource/header.php') ?>
    <section class="divison_section">
    <?php include('./resource/division.php') ?>
    </section>

  <section class="about_section_main" style="background: url('./assets/img/home/about.webp') no-repeat center center/cover;">
    <div class="about_section">
        <div class="about_section_content">
            <h4>
            Nature’s Purity, Your Well-Being
            </h4>
            <h2>
            Who We Are
            </h2>
            <p>
            At Anbin Varam, we offer 100% organic, chemical-free products and holistic healing through our Integrated Natural Hospital. Committed to health, sustainability, and eco-friendly practices, we bring nature’s best to you.
            </p>
            <ul class="mt-5">
                <li>
                    <span>
                    <i class="fa-solid fa-check"></i>
                    </span>
                <span>
                Natural Products For
                </span>
                </li>
                <li>
                    <span>
                    <i class="fa-solid fa-check"></i>
                    </span>
                    <span>
                    Loves of Healthy Food.
                    </span>
                </li>
            </ul>
           <a href="./about.php">
           <button>
                <span>
                    More
                </span>
                <span>
                <i class="fa-solid fa-arrow-right"></i>
                </span>
            </button>
           </a>
        </div>
        <div class="about_section_img">
        <swiper-container init="false" class="swiper mySwiper2">
    <swiper-slide class='swiper_slider'>
        <img src="./assets/img/about/image_1.webp" alt="">
    </swiper-slide>
    <swiper-slide class='swiper_slider'>
    <img src="./assets/img/about/image_2.webp" alt="">
    </swiper-slide>
    <swiper-slide class='swiper_slider'>
    <img src="./assets/img/about/image_3.webp" alt="">

    </swiper-slide>
  </swiper-container>
        </div>
    </div>
  </section>



  <!-- banner section -->
<section class="banner_section" style="background: url('./assets/img/home/offer_banner.webp') no-repeat center center/cover;">
<div class="banner_section_content">
    <h3>
    Quality and Purity
    </h3>
    <h2>
    SALE 10% OFF
    </h2>
    <p>
    organic grocery items for every family
    </p>
   <div class="flex justify-center mt-10">
   <a href="">
        <button>
            <span>
            Shop
            </span>
            <span>
            <i class="fa-solid fa-arrow-right"></i>
            </span>
        </button>
    </a>
   </div>
</div>

</section>

<section class="services_section_main" style="background: url('./assets/img/main/Section_bg.webp') no-repeat center center/cover;">
  <div class="services_section text-center ">
    <h3 class="service_sub_head">
      Healing Naturally, Living Fully.
    </h3>
    <h2 class="service_main_head">
      Natural Healing Services
    </h2>

    <div class="services_grid">
      <!-- Service Item -->
      <div class="service_card">
        <div class="service_image">
          <img src="./assets/img/home/image_1.webp" alt="">
        </div>
        <div class="service_content">
          <h2>Herbal Treatments</h2>
          <h3>Healing with nature’s finest herbs and remedies</h3>
        </div>
      </div>

      <div class="service_card">
        <div class="service_image">
          <img src="./assets/img/home/image_2.webp" alt="">
        </div>
        <div class="service_content">
          <h2>
          Ayurvedic Therapy
          </h2>
          <h3>
          Traditional wellness solutions for a balanced life.
          </h3>
        </div>
      </div>

      <div class="service_card">
        <div class="service_image">
          <img src="./assets/img/home/image_3.webp" alt="">
        </div>
        <div class="service_content">
          <h2>
          Nutrition & Lifestyle Guidance

          </h2>
          <h3>
          Personalized health plans for overall well-being.
          </h3>
        </div>
      </div>

      <div class="service_card">
        <div class="service_image">
          <img src="./assets/img/home/image_4.webp" alt="">
        </div>
        <div class="service_content">
          <h2>
          Detox & Wellness Programs
          </h2>
          <h3>
          Cleanse your body naturally for better health.
          </h3>
        </div>
      </div>
    </div>
  </div>
</section>









    <?php include('./resource/footer.php') ?>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script>

         var swiper2El = document.querySelector(".mySwiper2");
    Object.assign(swiper2El, {
      grabCursor: true,
      effect: "creative",
      creativeEffect: {
        prev: {
          shadow: true,
          translate: ["-120%", 0, -500],
        },
        next: {
          shadow: true,
          translate: ["120%", 0, -500],
        },
      },
    });
    swiper2El.initialize()
    </script>

</body>

</html>