<section class="main-banner" id="hero">
  <div class="heroText">
    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">{!! $banner->title !!}</h1>
    <p class="text-secondary-white-color" style="font-size: 17px!important;font-weight:400!important;" data-aos="fade-up" data-aos-delay="1000">{!! $banner->sub_title !!}</p>
    <br>
    <a href="{{ route('makanan.view') }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a>
  </div>
  <div class="videoWrapper">
    <video autoplay="" loop="" muted="" class="custom-video" poster="banner/banner.png">
      <source src="{{  URL::asset('asset/banner/'.$banner->video_banner)}}" type="video/mp4">Your browser does not support the video tag.
    </video>
  </div>
  <div class="overlay"></div>
</section>