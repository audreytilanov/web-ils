<?php
  $temp ="";
?>

<section class="portfolio-widget-1 pushtop-120">
  @foreach($pantais as $pantai)
  @if($pantai->status_tingkatan == "header")
  <div class="home-bg-1">
    <div class="container">
      <div class="row top-section">
        <h3><?php echo $pantai->title ?></h3>
        <div class="col-md-6 drag-this-left">
          <!-- <p class="pretitle"></p> -->
          <p style="text-align:justify;" id="desc"><?php echo $pantai->desc_left ?></p>
          <div class="portfolio-widget-1-tabs">
            <ul style="list-style:none">
              <li><a class="active" data-filter="*" href="#" >{{$pantai->sub_title}}</a>
              </li>
              @foreach($pantais as $pantaisub)
              @if($pantaisub->status_tingkatan == "sub")
              <li><a data-filter=".portfolio-{{$pantaisub->filter}}" href="#" id="click-pantai-1">{{$pantaisub->sub_title}}</a>
              <input type="text" id="desc_pantai_input" value="halo" hidden>
              <input type="text" id="text-right1" value=" " hidden>
              @endif
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-md-6 drag-this-right">      
          <p style="text-align:justify;" id="text-desc-right">
            <?php echo $pantai->desc_right ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  @endif
  
  @endforeach

  <div class="container drag-this-up">
    <div id="portfolio-widget-tab-content">
      @foreach($pantais as $pantai)
      @foreach($childpantais->slice(0, 4)  as $childpantai)
      @if($pantai->id == $childpantai->parent_id)
        <div class="portfolio-item portfolio-{{$pantai->filter}}">
          <a href="#"><img src="../asset/pantai/{{$childpantai->image}}" width="580px" height="300px" class="img-fluid" alt="{{$childpantai->image}}" style="height:300px;"></a>
        </div>
      @endif
      @endforeach
      
      @endforeach

    </div>
  </div>
  <div class="container" style="margin-top: 100px;margin-bottom: 100px;">
    <a href="{{ route('pantai.view') }}" class="btn btn-warning text-white hover-more" style="border-radius:50px; margin-bottom:40px;margin-left:auto">Load More</a>
    <div class="break-line"><hr></div>
  </div>
</section>

