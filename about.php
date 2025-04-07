
<?php
$page_title = "About Us | Anbin Varam";
$page_description = "Anbin Varam offers organic foods and natural healing for a healthy, sustainable, and chemical-free lifestyle.";
$page_url = "https://www.anbinvaram.com/";
$page_image = "./assets/img/main/logo.webp";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./resource/seo.php') ?>

    <!-- css -->
     <link rel="stylesheet" href="./assets/css/about/style.css">
   
</head>

<body>

    <?php include('./resource/header.php') ?>


    <section class="hero_section" style="background:url('./assets/img/hero_section/hero_section.webp') no-repeat center/cover">
<h2>About Us</h2>
    </section>


    <section class="about_section_main">
<div class="about_section">
    <div class="about_section_content">
        <p class="about_slogan_text">
        Nature’s Purity, Your Well-Being
        </p>
        <h2 class="about_section_text">
        Who We Are
        </h2>
        <p>
        At Anbin Varam, we offer 100% organic, chemical-free products and holistic healing through our Integrated Natural Hospital. Committed to health, sustainability, and eco-friendly practices, we bring nature’s best to you.        </p>
        <p class="mt-2">
        Anbin Varam is a vision-driven initiative blending the purity of organic farming with the wisdom of natural healing. Rooted in tradition, committed to well-being.
        </p>
    </div>
    <div class="about_section_img">
        <img src="./assets/img/about/abouts.webp" alt="">
    </div>
</div>
    </section>


<section class="journey_section_main mt-20">
    <h2 class="journey_section_head head_main_text text-center ">
    Our Journey
    </h2>
    <div class="journey_section p-3">
        <div class="journey_section_text">
        <p>
        In a fast-paced world, Anbin Varam was born from a desire to return to nature, tradition, and true wellness.
        </p>
        <p>
        What began as a small dream in a quiet village has grown into a movement for healthier living. We started with organic farming, growing food naturally—without chemicals and with care—just like our ancestors.
        </p>
        <p>
        As lives transformed through clean food, we expanded our vision by launching the Anbin Varam Nature Hospital, where ancient healing meets modern needs. Here, we treat the mind, body, and soul as one, helping people reconnect with the power of natural health.
        </p>

        <span class="quote_text">
        “At Anbin Varam, we believe ,when we live in harmony with nature, true wellness follows. “
        </span>
        </div>
        <div class="journey_img_section">
            <div class="journey_img_1 journey_img">
              <img src="./assets/img/about/image_1.webp" alt="">
            </div>
            <div class="journey_img_2 journey_img">
              <img src="./assets/img/about/image_2.webp" alt="">
                
            </div>
            <div class="journey_img_3 journey_img">
              <img src="./assets/img/about/image_3.webp" alt="">
                
            </div>
        </div>
    </div>
</section>

<section class="our_divisions mt-10">
<h2 class="head_main_text text-center our_divisions_head">
Our Divisions
</h2>
<div class="divisions_sections_container">
<?php include('./resource/division.php') ?>
<div class="divisions_box pink_bg">
        <span>
        Ancient Method, Modern Health
        </span>
        <div class="divisons_content ">
            <h2>
            Varam Wooden Cold Press Oil Mill
            </h2>
            <p>
            We produce pure, cold-pressed oils using traditional wooden chekku methods for natural health and wellness.       
                
        </div>
    </div>
<div class="divisions_box green_bg green_bg_2">
        <span>
        Pure. Traditional. Naturally Delicious.        
    </span>
    <img src="./assets/img/logo/hotel.webp" alt="" style="width: 220px;bottom:-10px;">

        <div class="divisons_content">
            <h2>
            VARAM Natural restaurant
            </h2>
            <p>
            Serving pure, traditional food made with love and natural ingredients.            </p>
          
        </div>
    </div>
  

    
</div>
</section>

<!-- vision -->

<section class="about_founder">
    <h2 class="head_main_text text-start p-2">
    The Visionary Behind Anbin Varam
    </h2>
    <div class="about_founder_content p-2 flex justify-center items-center ">
        <div class="about_img">
            <img src="./assets/img/temp/image.png" alt="">
        </div>
        <div class="about_content">
            <h2 class="text-4xl">
            Sengotaiyan
            </h2>
            <p>
            At the heart of Anbin Varam is a passionate visionary who believes in the power of nature to heal, nourish, and transform lives. Guided by a deep respect for traditional wisdom and a commitment to holistic wellness, our founder set out to create a space where people can reconnect with nature — through pure organic food and natural healing therapies. What began as a personal mission has grown into a movement for better living, healthier communities, and a more balanced world.
            </p>
        </div>
    </div>
</section>

<section class="image_section">
<div class="img_list">
              <img src="./assets/img/about/image_1.webp" alt="">
            </div>
            <div class="img_list">
              <img src="./assets/img/about/image_2.webp" alt="">
                
            </div>
            <div class="img_list ">
              <img src="./assets/img/about/image_3.webp" alt="">
                
            </div>
</section>



    <?php include('./resource/footer.php') ?>


    <!-- js -->

</body>

</html>