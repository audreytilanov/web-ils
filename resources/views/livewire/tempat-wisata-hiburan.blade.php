<section class="section-switch section-padding section-first pb-0 " id="tempat-wisata-hiburan">
  <div class="container">
    <!-- <div class="break-line"><hr></div> -->
    @foreach($headlines as $headline)
    <div class="row">
      <div class="col-12">
        <h2 class="mb-3" data-aos="fade-up" id="text-title-temp" ><?php echo $headline->title ?></h2>
      </div>
      <div class="col-lg-6 col-12 mt-3 mb-lg-5">
        <p class="me-4" data-aos="fade-up" data-aos-delay="300" id="text-desc-left" style="text-align:justice;"><?php echo $headline->desc_left ?></p>
      </div>
      <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
        <p data-aos="fade-up" data-aos-delay="500" id="text-desc-right" style="text-align:justice;"><?php echo $headline->desc_right ?></p>
      </div>
    </div>
    @endforeach
    <div class="row">
    <a href="{{ route('wisata.view') }}" class="btn btn-warning text-white hover-more" style="width:150px;margin-bottom:40px; margin-left:auto;border-radius:50px;">Load More</a>
    </div>  
  </div>
  <div class="no-margin-row row" style="padding-left:0; padding-right:0;">
  <?php $i=1;?>
  @foreach($wisatas as $wisata)
  <div class="col-lg-3 col-12">
    <img class="shadow-large" src="../asset/wisata-hiburan/{{$wisata->image}}" alt="insta-title" style="width:100%; height:300px; cursor:pointer" id="image-{{$i}}"/>
    <input type="text" id="text-left{{$i}}" value="<?php echo $wisata->desc_left ?>" hidden>
    <input type="text" id="text-right{{$i}}" value="<?php echo $wisata->desc_left ?> " hidden>
    <input type="text" id="text-title{{$i}}" value="<?php echo $wisata->title ?>" hidden>
  </div>
  <?php $i++;?>
  @endforeach
  </div>  
  
  
  
</section>
<div class="container" style="margin-top: 100px;margin-bottom: 60px;">
  <div class="break-line"><hr></div>
</div>