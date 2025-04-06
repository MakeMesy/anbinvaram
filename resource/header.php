<!-- top bar -->

<header class="top_Bar_section">
    <div class="top_bar">
        <div class="top_info_bar_left">
            <div class="top_info_bar_icon">
                  <div class="info_bar_icon ">
                        <img src="./assets/img/icon/phone-call.webp" alt="">
                  </div>
                  <div class="info_bar_text">
                    <span>
                    +91 98655 51457
                    </span>
                  </div>
            </div>

            <div class="top_info_bar_icon">
                  <div class="info_bar_icon ">
                        <img src="./assets/img/icon/email.webp" alt="">
                  </div>
                  <div class="info_bar_text">
                    <span>
                    contact@anbinvaram.com
                    </span>
                  </div>
            </div>
        </div>

        <div class="top_info_bar_right">
            <div class="insta social_icon">
            <img src="./assets/img/icon/instagram.webp" alt="">
            </div>
            <div class="insta social_icon">
            <img src="./assets/img/icon/facebook.webp" alt="">
            </div>
            <div class="insta social_icon">
            <img src="./assets/img/icon/whatsapp.webp" alt="">
            </div>
        </div>


    </div>
</header>
<nav id="nav">
  <div class="navbar">
  <div class="nav_text">
    <h2>
      Anbin Varam
    </h2>
  </div>
  <div class="nav_links">
    <ul>
      <li>
        <a href="">Home</a>
      </li>
      <li>
        <a href="">About</a>
      </li>
      <li>
        <a href="">Services</a>
      </li>
      <li>
        <a href="">Gallery</a>
      </li>
      <li>
        <a href="">Contact</a>
      </li>
    </ul>
  </div>
  <div class="shop_btn">
    <button>
      <span>
        <img src="./assets/img/icon/store.webp" alt="">
      </span>
      <span class="shop_btn_text">
        Shop
      </span>
    </button>
  </div>
  </div>

</nav>

<div class="mobile_navbar">
<div class="mobile_navbar_head">
<div class="nav_text">
    <h2>
      Anbin Varam
    </h2>
  </div>
  <div class="nav_toggle">
  <i class="fa-solid fa-bars"></i>
  </div>
</div>
  <div class="mobile_nav_links">
  <ul>
      <li>
        <a href="">Home</a>
      </li>
      <li>
        <a href="">About</a>
      </li>
      <li>
        <a href="">Services</a>
      </li>
      <li>
        <a href="">Gallery</a>
      </li>
      <li>
        <a href="">Contact</a>
      </li>
    </ul>
    <div class="mobile_shop_btn shop_btn mt-2">
    <button>
      <span>
        <img src="./assets/img/icon/store.webp" alt="">
      </span>
      <span class="shop_btn_text">
        Shop
      </span>
    </button>
  </div>
    <div class="top_bar mobile_bottom_bar mt-2">
        <div class="top_info_bar_left flex-col items-start">
            <div class="top_info_bar_icon">
                  <div class="info_bar_icon ">
                        <img src="./assets/img/icon/phone-call.webp" alt="">
                  </div>
                  <div class="info_bar_text">
                    <span>
                    +91 98655 51457
                    </span>
                  </div>
            </div>

            <div class="top_info_bar_icon">
                  <div class="info_bar_icon ">
                        <img src="./assets/img/icon/email.webp" alt="">
                  </div>
                  <div class="info_bar_text">
                    <span>
                    contact@anbinvaram.com
                    </span>
                  </div>
            </div>
        </div>

        <div class="top_info_bar_right top_info_bar_right_mobile mt-5">
            <div class="insta social_icon">
            <img src="./assets/img/icon/instagram.webp" alt="">
            </div>
            <div class="insta social_icon">
            <img src="./assets/img/icon/facebook.webp" alt="">
            </div>
            <div class="insta social_icon">
            <img src="./assets/img/icon/whatsapp.webp" alt="">
            </div>
        </div>


    </div>
  </div>
  </div>




<script>
 document.addEventListener('DOMContentLoaded',()=>{
  const nav=document.querySelector('#nav')

window.addEventListener('scroll',()=>{
 if(window.scrollY>20){
     nav.style.position='fixed'
 }else{
     nav.style.position='static'
 }
})
const mobile_links=document.querySelector('.mobile_nav_links')
const nav_toggle=document.querySelector('.nav_toggle')

nav_toggle.addEventListener('click',()=>[
  mobile_links.classList.toggle('active')
])


 })
</script>