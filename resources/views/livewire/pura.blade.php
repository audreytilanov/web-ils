
@foreach($puras as $pura)
<section id="pura">
<div class="about-4 content-section content-section-spacing" >
  <div class="container">
    <div class="row middle-sm text-center">
      <div class="col-sm-5 space-bottom-xs" data-type="column">
        <h2 class="">{{$pura->title}}</h2>
        <p class="" style="text-align:justify"><?php echo $pura->sub_title ?></p> 
    </div>
      <div class="col-sm-7 flexbox center-xs middle-xs image-group-2-img" style="margin-top:50px">
      <img class="img-1 shadow-large lazy-loaded" data-size="250x200" src="../asset/pura/{{$pura->image1}}" >
      <noscript><img class="img-1 shadow-large" data-size="250x200" src="../asset/pura/{{$pura->image1}}" /></noscript> 
      
      <img class="img-2 shadow-large lazy-loaded" data-size="220x170" src="../asset/pura/{{$pura->image2}}" ><noscript><img class="img-2 shadow-large" data-size="220x170" src="../asset/pura/{{$pura->image2}}" /></noscript></div>
    </div>
  </div>
</div>
</section>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-lg-6 col-12 mt-3">
      <p class="me-4" data-aos="fade-up" data-aos-delay="300" style="text-align:justify; "><?php echo $pura->desc_left ?></p>
    </div>
    <div class="col-lg-6 col-12 mt-3">
      <p class="me-4" data-aos="fade-up" data-aos-delay="300" style="text-align:justify"><?php echo $pura->desc_right ?></p>
    </div>
  </div>
  <div class="break-line" style="margin-top: 100px;margin-bottom: 60px;"><hr></div>
</div>
@endforeach