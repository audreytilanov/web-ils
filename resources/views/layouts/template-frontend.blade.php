<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>ILS 2021 | <?php echo $page ?> </title>


    <!-- Favicon -->
    <link rel="shorcut icon" href="{{asset('../asset/logo/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('../asset/logo/favicon.ico')}}" type="image/x-icon">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">


    <!-- LinK Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">


    <!-- Vendor CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.css">
    <!-- <link href="../css/aos.css" rel="stylesheet"> -->
    <link href="../plugin/opins-icon/style.css" rel="stylesheet">

    <!-- Link Custom CSS -->
    <!-- <link href="../css/custom-2.css" rel="stylesheet"> -->
    <link href="../css/custom.css" rel="stylesheet">
    

    <!-- Vendor JS -->
    <!-- <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> -->
  </head>
  
  <body>
    <main>
      @livewire('banner')

      @include('components.navbar-home')

      
      @yield('content')

      @livewire('gallery-image')

      <section class="other-sites">
        <div class="container">
          <div class="row content justify-content-center" style="align-items: center;">
            <div class="col-lg-4 col-12 text-center text justify-content-center" style="align-items: center;">
              <p><a class="text-decoration-none text-white" href="#">Ministry of Tourism and Creative Economy<br><span> Republic of Indonesia</span></a>
              </p>
            </div>
            <div class="col-lg-2 col-sm-4 my-3 col-4 d-flex justify-content-center text-center image"><a href="#"> <img src="../asset/umum/yatch.svg" alt="" width="100%"></a></div>
            <div class="col-lg-2 col-sm-4 my-3 col-4 d-flex justify-content-center text-center image"><a href="#"> <img src="../asset/umum/yatch.svg" alt="" width="100%"></a></div>
            <div class="col-lg-2 col-sm-4 my-3 col-4 d-flex justify-content-center text-center image"><a href="#"> <img src="../asset/umum/yatch.svg" alt="" width="100%"></a></div>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h5 class="text-white">
              <!-- <i class="bi-geo-alt-fill me-2"></i> -->
              Interpersonal & Life Skill</h5>
            <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">IT 2021</a>
          </div>
          <div class="col-6">
            <p class="copyright-text mb-0">Copyright ©ILS-TI 2021
            <br><br>Design: <a href="https://templatemo.com/page/1" target="_parent">ILS 2021</a></p>
          </div>
          <div class="col-lg-3 col-5 ms-auto">
            <ul class="social-icon">
              <li><a href="#" class="social-icon-link bi-facebook"></a></li>
              <li><a href="#" class="social-icon-link bi-twitter"></a></li>
              <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
              <li><a href="#" class="social-icon-link bi-instagram"></a></li>
              <li><a href="#" class="social-icon-link bi-youtube"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mx-0 pt-5 mb-n4 footer-text mt-5 justify-content-center align-items-center" style="border-top: #112443 solid 2px ;">
        <div class="col-9 text-center">
          <div class="container">
            <p class="explanation mx-n4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga incidunt consequuntur accusamus, et possimus omnis blanditiis perferendis. Sint nam nobis perspiciatis. Asperiores cumque voluptatem voluptate incidunt adipisci ab reprehenderit officiis!</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="color-switcher">
      <div class="switcher-btn">
        <i class="fas fa-cog"></i>
      </div>
      <h3>Chose a theme</h3>
      <div class="theme-buttons-container">
        <span class="theme-buttons" data-color="#091426" data-color-font="#fefefe" data-color-p="#fefefe" data-color-intro2="#142b4f" style="background: #091426;"></span>
        <span class="theme-buttons" data-color="#fefefe" data-color-font="#091426" data-color-p="##717275" data-color-intro2="#142b4f" style="background: #fefefe;"></span>
        <span class="theme-buttons" data-color="#fca721" data-color-font="#fefefe" data-color-p="#fefefe" data-color-intro2="#d68b13" style="background: #fca721;"></span>
        <span class="theme-buttons" data-color="#27ae60" data-color-font="#fefefe" data-color-p="#fefefe" data-color-intro2="#21cc69" style="background: #27ae60;"></span>
        <span class="theme-buttons" data-color="#ae2027" data-color-font="#fefefe" data-color-p="#fefefe"  data-color-intro2="#db2a32" style="background: #ae2027;"></span>
        <span class="theme-buttons" data-color="#b33270" data-color-font="#fefefe" data-color-p="#fefefe" data-color-intro2="#e84393" style="background: #b33270;"></span>
        <span class="theme-buttons" data-color="#d43745" data-color-font="#fefefe" data-color-p="#fefefe" data-color-intro2="#ff4757" style="background: #d43745;"></span>
        <span class="theme-buttons" data-color="#e0ac12" data-color-font="#fefefe" data-color-p="#fefefe"  data-color-intro2="#ffc312"style="background: #e0ac12;"></span>
        <span class="theme-buttons" data-color="#16a7cc" data-color-font="#fefefe" data-color-p="#fefefe" data-color-intro2="#17c0eb" style="background: #16a7cc;"></span>
      </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="../js-frontend/jquery.min.js"></script>
    <script src="../js-frontend/bootstrap.bundle.min.js"></script>
    <script src="../js-frontend/jquery.sticky.js"></script>
    <script src="../js-frontend/aos.js"></script>

    <!-- VENDOR JS -->
    <script src="../js-frontend/jquery.magnific-popup.min.js"></script>
    <script src="../js-frontend/magnific-popup-options.js"></script>
    <script src="../js-frontend/js/jquery.bxslider.min.js"></script>
    <script src="../plugin/isotope/isotope.pkgd.min.js"></script>
    <script src="../plugin/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.js"></script>
    <!-- <script src="js/scrollspy.min.js"></script> -->
    
    <script>
      $(document).ready(function(){
        $('.venobox').venobox({
          closeColor:'#f4f4f4',
          spinColor: '#f4f4f4',
          arowsColor: 'f4f4f4',
          closeBackground: '#17191D',
          overlayColor: 'rgba(23,25,29,0.8)'
        });
      });
    </script>
    <script>
      const element1 = document.getElementById("text-desc-left");
      const element2 = document.getElementById("text-desc-right");
      const titletemp = document.getElementById("text-title-temp");
      const desc_pantai_left = document.getElementById("desc-pantai-left");
      const desc_pantai_right = document.getElementById("desc-pantai-right");
      document.getElementById("click-pantai-1").addEventListener("click", function() {
        var pantai1_desc_left = document.getElementById("desc_pantai1_left").value;
        var pantai1_desc_right = document.getElementById("desc_pantai1_right").value;
        desc_pantai_left.innerHTML= pantai1_desc_left;
        desc_pantai_right.innerHTML= pantai1_desc_right;
      });

      document.getElementById("click-pantai-2").addEventListener("click", function() {
        var pantai2_desc_left = document.getElementById("desc_pantai2_left").value;
        var pantai2_desc_right = document.getElementById("desc_pantai2_right").value;
        desc_pantai_left.innerHTML= pantai2_desc_left;
        desc_pantai_right.innerHTML= pantai2_desc_right;
      });

      document.getElementById("image-1").addEventListener("click", function() {
        var titlechange = document.getElementById("text-title1").value;
        var temp1 = document.getElementById("text-left1").value;
        var temp2 = document.getElementById("text-right1").value;
        element1.innerHTML= temp1;
        element2.innerHTML= temp2;
        titletemp.innerHTML= titlechange;
      });
      document.getElementById("image-2").addEventListener("click", function() {
        var titlechange = document.getElementById("text-title2").value;
        var temp1 = document.getElementById("text-left2").value;
        var temp2 = document.getElementById("text-right2").value;
        element1.innerHTML= temp1;
        element2.innerHTML= temp2;
        titletemp.innerHTML= titlechange;
      });
      document.getElementById("image-3").addEventListener("click", function() {
        var titlechange = document.getElementById("text-title3").value;
        var temp1 = document.getElementById("text-left3").value;
        var temp2 = document.getElementById("text-right3").value;
        element1.innerHTML= temp1;
        element2.innerHTML= temp2;
        titletemp.innerHTML= titlechange;
      });
      document.getElementById("image-4").addEventListener("click", function() {
        var titlechange = document.getElementById("text-title4").value;
        var temp1 = document.getElementById("text-left4").value;
        var temp2 = document.getElementById("text-right4").value;
        element1.innerHTML= temp1;
        element2.innerHTML= temp2;
        titletemp.innerHTML= titlechange;
      });
    </script>
    <!-- <script src="../js/js/waypoints.min.js"></script>
    <script src="../js/js/jquery.easing.min.js"></script>
    <script src="../js/js/jquery.counterup.min.js"></script>
    <script src="../js/js/wow.js"></script> -->
    <script src="../js-frontend/custom.js"></script>

  </body>
</html>