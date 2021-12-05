<section class="atbs-block atbs-block--fullwidth atbs-post--grid-b section-desa" >
  <div class="container">
    @foreach($desas as $desa)
      <div class="post--grid-b__inner">
        <div class=" block-heading ">
            <h3 class="section-title">{{$desa->title}}</h3>
            <!-- <p class="sub-heading__title">Quis ipsum suspendisse ultrices gravida. </p> -->
        </div>
        <div class="post--grid-b__wrap">
          <div class="lists-post--nothumbnail">
            <div class="row">
              <div class="col-lg-6 col-12 mt-3">
                <p class="me-4" data-aos="fade-up" data-aos-delay="300" style="text-align:justify; "><?php echo $desa->desc_left ?></p>
              </div>
              <div class="col-lg-6 col-12 mt-3">
                <p class="me-4" data-aos="fade-up" data-aos-delay="300" style="text-align:justify"><?php echo $desa->desc_right ?></p>
              </div>
            </div>
          </div>
          <div class="big-post--horizontal" style="margin-top:20px;">
            <article class="post post--horizontal ">
              <div class="post__text" style="right:unset;z-index:1;">
                <div class="post__text-top" style="margin-left:unset;">
                  <p class="me-4" data-aos="fade-up" data-aos-delay="300" style="text-align:justify; "><?php echo $desa->sub_title ?></p> 
                </div>
              </div>
              <div class="post__thumb" style="float:right;">
                <div class="background-img shadow-large" style="background-image:url(../asset/desa/{{$desa->image}})"></div>
                <a href="#" class="link-overlay"></a>
              </div>                
            </article>
          </div>         
        </div>
      </div>
    @endforeach
  </div>
</section>
<div class="container" style="margin-top: 100px;margin-bottom: 60px;">
  <div class="break-line"><hr></div>
</div>
