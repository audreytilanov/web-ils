<!-- Start Section About -->
<section class="section-switch pb-0 " id="ourcategories" style="margin-top: -3rem;">
  <div class="container">
    <div class="break-line" style="margin-top: 100px;margin-bottom: 60px;"><hr></div>
  </div>
  <div class="container-fluid shadow-small">
    <div class="row">
    @foreach($intro2s as $intro2)
    @if($intro2->status == 'primary')
      <div class="col-lg-3 col-12 p-0">      
        <img src="../asset/intro2/{{$intro2->image}}" width="735" height="919" class="img-fluid about-image" alt="">
      </div>
      <div class="col-lg-3 col-12 background-intro2">  
        <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
          <h3 class="text-white mb-3" data-aos="fade-up"><?php echo $intro2->title?></h3>
          <p class="text-secondary-white-color" data-aos="fade-up" style="font-weight: 400;"><?php echo $intro2->desc?></p>
        </div>
      </div>
    @endif
    @endforeach

      <div class="col-lg-6 col-12 p-0">  
        <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        
          <div class="carousel-inner">
          @foreach($intro2s as $intro2)
          @if($intro2->status == "sub")
            @if($intro2->id ==2)
            <div class="carousel-item active">
              <img src="../asset/intro2/{{$intro2->image}}" class="img-fluid team-image" alt="">
              <div class="team-thumb background-intro2">
                <h3 class="text-white mb-0"><?php echo $intro2->title?></h3>
                <p class="text-secondary-white-color mb-0"><?php echo $intro2->desc?></p>
              </div>
            </div>
            @else
            <div class="carousel-item">
              <img src="../asset/intro2/{{$intro2->image}}" width="1500" height="971"  class="img-fluid team-image" alt="" style="height:400px">
              <div class="team-thumb background-intro2" >
                <h3 class="text-white mb-0"><?php echo $intro2->title?></h3>
                <p class="text-secondary-white-color mb-0"><?php echo $intro2->desc?></p>
              </div>
            </div>
            @endif
          @endif
          @endforeach
          </div> 
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </section>
      </div>
    </div> 
  </div>
  <div class="container">
    <div class="break-line" style="margin-top: 100px;margin-bottom: 60px;"><hr></div>
  </div> 
</section>
<!-- End Section About -->
