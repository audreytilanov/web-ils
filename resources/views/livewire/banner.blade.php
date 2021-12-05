<section class="main-banner" id="hero">
  <div class="heroText">
    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">{{$banner->title}}</h1>
    <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000"><strong>{{$banner->sub_title}}</strong></p>
  </div>
  <div class="videoWrapper">
    <video autoplay="" loop="" muted="" class="custom-video" poster="banner/banner.png">
      <source src="../asset/banner/{{$banner->video_banner}}" type="video/mp4">Your browser does not support the video tag.
    </video>
  </div>
  <div class="overlay"></div>
</section>