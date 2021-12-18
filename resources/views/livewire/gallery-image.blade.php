<div class="instagram" id="instagram" style="margin-bottom: 100px;">
  <div class="container">
    <!-- <a href="#" class="btn btn-default btn-instagram"><span style="font-weight: 600;">Gallery</span></a> -->
    <!-- images -->
    <div class="instagram-feed d-flex flex-wrap">
      @foreach($galleryImages as $galleryImage)
      <div class="insta-item col-sm-2 col-6 col-md-2">
        <a href="#">
          <img src="{{  URL::asset('asset/gallery-image/'.$galleryImage->image)}}" alt="insta-title" />
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>