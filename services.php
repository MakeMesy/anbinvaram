<?php
$page_title = "Services | Anbin Varam";
$page_description = "";
$page_url = "https://www.anbinvaram.com/";
$page_image = "./assets/img/main/logo.webp";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./resource/seo.php') ?>

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/services/style.css">

</head>

<body>

    <?php include('./resource/header.php') ?>

    <section class="hero_section" style="background:url('./assets/img/hero_section/hero_section.webp') no-repeat center/cover">
        <h2 class="text-center">Pure Living, Pure Healing
            Our Services</h2>
    </section>


    <section class="about_section_main">
        <h2 class='text-center main_head_text green_head'>
            Holistic Wellness, Rooted in Nature
        </h2>
        <div class="about_section">

            <div class="about_section_content">
                <p>
                    At Anbin Varam, we are committed to holistic well-being through nature’s wisdom. Our four core divisions—Organic Foods, Nature Hospital, Wellness Therapies, and Natural Living Solutions—offer a pure and sustainable path to health, healing, and balanced living.
                </p>
                <p class="about_slogan">
                    “ Embrace Nature, Nourish Health, Heal Holistically, Live Purely “
                </p>
            </div>
            <div class="about_section_img">
                <img src="./assets/img/services/main.webp" alt="">
            </div>
        </div>
    </section>

    <section class="natural_store services_section">
        <h2 class="text-start services_section_head">
        Anbin Varam Natural Store
        </h2>
        <h2 class="text-end services_section_head">
        -Pure, Authentic, and Wholesome
        </h2>
        <p>
        At Anbin Varam Natural Store, we bring you the essence of nature in its purest form. Our carefully curated range of organic foods, herbal remedies, and eco-friendly products is designed to nourish your body, heal naturally, and promote a toxin-free lifestyle.
        </p>
        <button>
            <span>
                view Store
            </span>
            <span>
            <i class="fas fa-arrow-right"></i>
            </span>
        </button>
        <div class="services_points">
            <div class="services_point point_1">
                    <div>
                    <h2>
                    100% Natural & Chemical-Free
                    </h2>
                    <p>
                    Sourced directly from trusted farms and traditional practices.
                    </p>
                    </div>
                    <div>
                        <img src="./assets/img/services/point_1.webp" alt="">
                    </div>
            </div>
            <div class="services_point point_2 flex justify-end">
                    <div>
                    <h2>
                    Holistic Wellness Solutions
                    </h2>
                    <p>
                    From organic grains to herbal health products, everything you need for a balanced life.                    </p>
                    </div>
                    <div>
                        <img src="./assets/img/services/point_2.webp" alt="">
                    </div>
            </div>
            <div class="services_point point_3 flex justify-end ">
                    <div>
                    <h2>
                    Sustainability & Purity
                    </h2>
                    <p>
                    Ethical sourcing, eco-friendly packaging, and a commitment to your well-being.                    </p>
                    </div>
                    <div>
                        <img src="./assets/img/services/point_3.webp" alt="">
                    </div>
            </div>
        </div>
    </section>

    <section class="anbin_hosbital services_section ">
        <h2 class="text-end services_section_head">
        Anbin Varam Nature Hospital
        </h2>
        <h2 class="text-start services_section_head">
        -Healing Through Nature’s Wisdom
        </h2>
        <p>
        At Anbin Varam Nature Hospital, we believe that true healing begins when we align with nature. Our center offers holistic treatments rooted in ancient wisdom, providing a peaceful space where the body, mind, and soul can heal together — naturally.
            </p>
        <button>
            <span>
                view
            </span>
            <span>
            <i class="fas fa-arrow-right"></i>
            </span>
        </button>
        <div class="hospital_section_main mt-5">
            <div class="hospital_section_1 hospital_section">
              <div class="hospital_section_point">
              <div class="hospital_section_1_con">
                    <h2>
                    Detox & Stress Relief Treatments
                    </h2>
                    <p>
                    Rejuvenate your body and mind with natural detox and stress relief.
                    </p>
                </div>
                <div class="hospital_section_img">
                    <img src="./assets/img/services/image_1.webp" alt="">
                </div>
              </div>
              <div class="hospital_section_point">
              <div class="hospital_section_img">
                    <img src="./assets/img/services/image_3.webp" alt="">
                </div>
              <div class="hospital_section_1_con ">
                    <h2>
                    Naturopathy & Herbal Therapies
                    </h2>
                    <p>
                    Restore balance and vitality with holistic naturopathy and herbal treatments                    </p>
                </div>
              
              </div>
            </div>
            <div class="hospital_section_2 hospital_section flex mt-5 justify-center">
              <div class="hospital_section_2_point hospital_section_point">
              <div class="hospital_section_img flex justify-center mb-3">
                    <img src="./assets/img/services/image_2.webp" alt="">
                </div>
              <div class="hospital_section_2_con">
                    <h2>
                    Yoga & Meditation Programs
                    </h2>
                    <p>
                    Achieve inner peace and strength through personalized yoga and meditation.                    </p>
                </div>
                
              </div>
            
            </div>
            
        </div>
    </section>


    <?php include('./resource/footer.php') ?>


    <!-- js -->

</body>

</html>