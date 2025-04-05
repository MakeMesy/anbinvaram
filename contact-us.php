
<?php
$page_title = "Anbin Varam";
$page_description = "";
$page_url = "https://www.anbinvaram.com/";
$page_image = "./assets/img/main/icon.png";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./resource/seo.php') ?>

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/contact/style.css">
</head>

<body>

    <?php include('./resource/header.php') ?>
   
    <section class="hero_section" style="background:url('./assets/img/hero_section/hero_section.webp') no-repeat center/cover">
<h2>Contact Us</h2>
    </section>

    <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.012615992313!2d-122.41941528468123!3d37.77492927975901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064dfbb466f%3A0xe4c9e5ee515f6b98!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1617221229011!5m2!1sen!2sus"

  style="border:0;"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>


<section class="contact_section">
    <div class="contact_main">
        <h2 class="contact_head_text text-5xl tracking-wider" >
            Get In Touch 
        </h2>
        <p class="contact_content_text">
        Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form and we’ll get back to you.
        </p>
        <div class="contact_detail_main mt-6">
        <div class="contact_detail mt-3" >
                  <div class="detail_icon ">
                        <img src="./assets/img/icon/email.webp" alt="">
                  </div>
                  <div class="detail_text">
                    <span>
                    contact@anbinvaram.com
                    </span>
                  </div>
            </div>

            <div class="contact_detail mt-3" >
                  <div class="detail_icon ">
                        <img src="./assets/img/icon/phone-call.webp" alt="">
                  </div>
                  <div class="detail_text">
                    <span>
                    +91 98655 51457
                    </span>
                  </div>
            </div>

            <div class="contact_detail mt-3" >
                  <div class="detail_icon ">
                        <img src="./assets/img/icon/location.webp" alt="">
                  </div>
                  <div class="detail_text">
                    <span>
                    Arv business complex, Bhavani main Road . 
                    Anthiyur ,Erode-638501
                    </span>
                  </div>
            </div>
        </div>
    </div>
    <div class="contact_form">
    <h2 class="contact_head_text text-5xl tracking-wider" >
    Drop Us a Line
        </h2>
        <form action="">
     <div class="input_forms">
     <div class="input_form">
            <span>
                <img src="./assets/img/icon/user.webp" alt="">
            </span>
            <input type="text" placeholder="Full Name">
          </div>     <div class="input_form">
            <span>
                <img src="./assets/img/icon/email.webp" alt="">
            </span>
            <input type="text" placeholder="Email">
          </div>
     </div>
     <div class="input_form subject_section mt-10" >
            <span>
                <img src="./assets/img/icon/subject.webp" alt="">
            </span>
            <input type="text" placeholder="Subject">
          </div>
          <div class="input_form mt-10">
            <textarea name="" id="" placeholder="Your Message Here"></textarea>
           </div>
           <div class="submit_btn mt-6">
            <button>
           <span>
           GET IN TOUCH
           </span> <span>
            <img src="" alt="">
           </span>
            </button>
           </div>
        </form>
    </div>
</section>



    <?php include('./resource/footer.php') ?>


    <!-- js -->

</body>

</html>