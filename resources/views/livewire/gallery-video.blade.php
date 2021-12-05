<section class="axil-video-post-area axil-section-gap bg-color-black" id="our-video">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        @foreach($galleryVideos as $galleryVideo)
        @if($galleryVideo->status == "header")
        <div class="section-title">
          <h2 class="section-title">{{$galleryVideo->title}}</h2>
        </div>
        @endif
        @endforeach
      </div>
    </div>
    <div class="row videos" style="align-items: center;">
      <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
        @foreach($galleryVideos as $galleryVideo)
        <?php $i=1;?>
        @if($galleryVideo->status == "sub")
          @if($galleryVideo->id == 2)
          <!-- Start Post List  -->
          <div class="content-block post-default image-rounded mt--30">
              <div class="video post-thumbnail">
                  <a class="venobox vbox-item" data-autoplay="true" data-vbtype="video" href="{{$galleryVideo->link_yt}}" data-gall="myGallery">
                      <img src="../asset/gallery-video/{{$galleryVideo->image}}" width="500" height="500" alt="Post Images">
                  </a>
                  <a class="video-popup position-top-center venobox vbox-item" data-autoplay="true" data-vbtype="video" href="{{$galleryVideo->link_yt}}" data-gall="myGallery"><span class="play-icon"></span></a>
              </div>
              <div class="post-content">
                  <div class="post-cat">
                      <div class="post-cat-list">
                          <a class="hover-flip-item-wrapper" href="#">
                              <span class="hover-flip-item">
                                  <span data-text="CAREERS">CAREERS</span>
                              </span>
                          </a>
                      </div>
                  </div>
                  <h5 class="post-title"><a href="#">{{$galleryVideo->title}}</a></h5>
              </div>
          </div>
          <!-- End Post List  -->
          @endif
        @endif
        @endforeach
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
        <div class="row">
        @foreach($galleryVideos as $galleryVideo)
        @if($galleryVideo->status == "sub" and $galleryVideo->id != 2)
          <!-- Start Post List  -->
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="content-block post-default image-rounded mt--30">
                  <div class="video post-thumbnail">
                      <a class="venobox vbox-item" data-autoplay="true" data-vbtype="video" href="{{$galleryVideo->link_yt}}" data-gall="myGallery">
                          <img src="../asset/gallery-video/{{$galleryVideo->image}}" width="550" height="200" alt="Post Images">
                      </a>
                      <a class="video-popup size-medium position-top-center venobox vbox-item" data-autoplay="true" data-vbtype="video" href="{{$galleryVideo->link_yt}}" data-gall="myGallery"><span class="play-icon"></span></a>
                  </div>
                  <div class="post-content">
                      <div class="post-cat">
                          <div class="post-cat-list">
                              <a class="hover-flip-item-wrapper" href="#">
                                  <span class="hover-flip-item">
                                      <span data-text="LIFESTYLE">LIFESTYLE</span>
                                  </span>
                              </a>
                          </div>
                      </div>
                      <h6 class="post-title"><a href="#">{{$galleryVideo->title}}</a></h6>
                  </div>
              </div>
          </div>
          <!-- End Post List  -->
        @endif
        @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container" style="margin-top: 100px;margin-bottom: 60px;">
  <div class="break-line"><hr></div>
</div>