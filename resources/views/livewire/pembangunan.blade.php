<section class="atbs-block atbs-block--fullwidth atbs-post--grid-a section-padding" id="pembangunan">
  @foreach($pembangunans as $pembangunan)
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-3" data-aos="fade-up">{{$pembangunan->title}}</h2>
      </div>
      <div class="col-lg-6 col-12 mt-3">
      <p data-aos="fade-up" data-aos-delay="500" style="text-align:justify">Tanggal :  <?php echo $pembangunan->tanggal ?> <br>Sumber: {{$pembangunan->sumber }}</p>
        <p class="me-4" data-aos="fade-up" data-aos-delay="300" style="text-align:justify"><?php echo $pembangunan->desc_left ?></p>

      </div>
      <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
        <p data-aos="fade-up" data-aos-delay="500" style="text-align:justify"><?php echo $pembangunan->desc_right ?></p>
        
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-12 mt-3">
        <img class="shadow-small" src="../asset/pembangunan/{{$pembangunan->image1}}" alt="" style="width:100%; border-radius:15px; margin-bottom:10px; height:300px;">
      </div>
      <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
        <img class="shadow-small" src="../asset/pembangunan/{{$pembangunan->image2}}" alt="" style="width:100%;border-radius:15px; height:300px;">
      </div>
    </div>
    <a href="{{ route('pembangunan.view') }}" class="btn btn-warning text-white hover-more" style="float: right;border-radius:50px;">Load More</a>
  </div>
  @endforeach
</section>
<div class="container c-subkategori1" style="margin-bottom: 60px;">
    <div class="break-line"><hr></div>
</div>
