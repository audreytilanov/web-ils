<section class="atbs-block atbs-block--fullwidth atbs-post--grid-b" id="sejarah">
  <div class="container">
      <div class="post--grid-b__inner">
        @foreach($sejarahs as $sejarah)
        <div class=" block-heading ">
            <h3 class="section-title">{{$sejarah->header}}</h3>
            <!-- <p class="sub-heading__title">Quis ipsum suspendisse ultrices gravida. </p> -->
        </div>
        <div class="post--grid-b__wrap">
            <div class="big-post--horizontal">
              <article class="post post--horizontal ">
                  <div class="post__thumb">
                    <div class="background-img shadow-large" style="background-image:url(../asset/sejarah/{{$sejarah->image}})"></div>
                    <a href="#" class="link-overlay"></a>
                  </div>
                  <div class="post__text">
                    <div class="post__text-top">
                        <h4 class="post-title"><a href="#"><?php echo $sejarah->title ?></a></h4>
                    </div>
                    <div class="post__excerpt"><p class="me-4" data-aos="fade-up" data-aos-delay="300" style="text-align:justify; "><?php echo $sejarah->sub_title ?></p></div>
                    <!-- <div class="post__readmore clearfix ">
                        <a href="#" class="button__readmore" style="margin-top: 20px;"><span class="readmore__text">read More </span>
                        </a>
                    </div> -->
                  </div>
              </article>
            </div>
            <div class="row">
              <div class="col-lg-6 col-12 mt-3">
                <p class="me-4" data-aos="fade-up" data-aos-delay="300" style="text-align:justify; "><?php echo $sejarah->desc_left ?></p>
              </div>
              <div class="col-lg-6 col-12 mt-3">
                <p class="me-4" data-aos="fade-up" data-aos-delay="300" style="text-align:justify"><?php echo $sejarah->desc_right ?></p>
              </div>
            </div>
        </div>
        @endforeach
      </div>
      <a href="{{ route('sejarah.view') }}" class="btn btn-warning text-white hover-more" style="float: right;border-radius:50px;">Load More</a>
  </div>
</section>
<div class="container" style="margin-top: 100px;margin-bottom: 60px;">
  <div class="break-line"><hr></div>
</div>
