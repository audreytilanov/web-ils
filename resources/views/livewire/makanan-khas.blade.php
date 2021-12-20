<?php
  $count1=0;
  $count2=0;
?>
<section class="testimonials-style-one" id="makanan-khas">
  <!-- <img src="images/map-1-1.png" alt="Awesome Image" class="map-img" /> -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex">
        <div class="my-auto mx-auto">
          <!-- <img src="images/testi-1-1.png" alt="Awesome Image" class="testi-img" /> -->
          <div id="testimonials-slider-pager">
            <div class="testimonials-slider-pager-one">
              @foreach($foods as $food)
              @if($food->status == "sub")
              @if($food->id ==1)
              <a href="#" class="pager-item active" data-slide-index="{{$count1}}"><img src="../asset/food/{{$food->image}}}}" alt="Awesome Image" /></a>
              @else
              <a href="#" class="pager-item" data-slide-index="{{$count1}}"><img src="../asset/food/{{$food->image}}" alt="Awesome Image" /></a>
              @endif
              <?php $count1++; ?>
              @endif
              @endforeach
            </div><!-- /.testimonials-slider-pager-one -->
            <div class="testimonials-slider-pager-two">
              @foreach($foods as $food)
              @if($food->status == "sub")
              @if($food->id ==1)
              <a href="#" class="pager-item active" data-slide-index="{{$count2}}"><img src="../asset/food/{{$food->image}}}}" alt="Awesome Image" /></a>
              @else
              <a href="#" class="pager-item" data-slide-index="{{$count2}}"><img src="../asset/food/{{$food->image}}" alt="Awesome Image" /></a>
              @endif
              <?php $count1++; ?>
              @endif
              @endforeach
            </div><!-- /.testimonials-slider-pager-two -->
          </div><!-- /#testimonials-slider-pager -->
        </div><!-- /.my-auto -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6 testimonial-content" style="margin-top:50px;">
        <div class="block-title ">
          @foreach($foods as $food)
          @if ($food->status == "header" and $food->id ==1)
          <h2><?php echo $food->title ?></h2>
          @endif
          @endforeach
        </div><!-- /.block-title -->
          <ul class="slider testimonials-slider">
            @foreach($foods as $food)
            @if($food->status == "sub")
            <li class="slide-item">
              <div class="single-testi-one">
                <p><?php echo $food->desc ?></p>
                <h3><strong>{{$food->title}}</strong></h3>
              </div><!-- /.single-testi-one -->
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