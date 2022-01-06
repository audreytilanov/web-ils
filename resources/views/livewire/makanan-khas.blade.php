<?php
  $count1=0;
  $count2=0;
?>
<section class="testimonials-style-one" id="makanan-khas">
  <!-- <img src="images/map-1-1.png" alt="Awesome Image" class="map-img" /> -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 testimonial-content" style="margin-top:50px;">
        <div class="block-title ">
          @foreach($foods_header as $food)
          <h2><?php echo $food->title ?></h2>
          @endforeach
        </div><!-- /.block-title -->
          <ul class="slider testimonials-slider">
            @foreach($foods as $food)
            @if($food->status == "sub")
            
            <li class="slide-item">
              <div class="row">
                <div class="col-lg-6">
                  <img class="shadow-small" src="../asset/food/{{$food->image}}" alt="" style="width:100%; border-radius:15px; margin-bottom:10px; height:300px;">
                </div>
                <div class="col-lg-6">
                  <div class="single-testi-one">
                    <p><?php echo $food->desc ?></p>
                    <h3><strong>{{$food->title}}</strong></h3>
                  </div>
                </div><!-- /.single-testi-one -->
              </div>
              
            </li>
            @endif
            @endforeach
          </ul>
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <br>
    <a href="{{ route('makanan.view') }}" class="btn btn-warning text-white hover-more" style="float: right;border-radius:50px;">Load More</a>

  </div><!-- /.container -->
</section><!-- /.testimonials-style-one -->

<div class="container" style="margin-top: 100px;margin-bottom: 60px;">
  <div class="break-line"><hr></div>
</div>