<?php
  $title="ILS 2021 | Admin";
?>

@extends('layouts.template')
@section('content')
    
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
  <div class="container-fluid">
    <div class="page-titles">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{Route('home_admin')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Content Intro I</a></li>
      </ol>
    </div>
    <!-- row -->
    @foreach($contents as $content)
    <div class="row">
      <div class="col-xl-12 col-xxl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit List Content Pembangunan</h4>
          </div>
          <div class="card-body">
            <form action="{{Route('save_addcontentIntro1')}}" method="POST" id="step-form-horizontal" class="step-form-horizontal" >
              @csrf
              <div>
                <section>
                  <div class="row">
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                        <label class="text-label">title*</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="inputGroupPrepend2" value="{{$content->title}}" required>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                        <label class="text-label">Deskripsi Paragraf Kiri*</label>
                        <textarea class="form-control" rows="5" id="desc_left" name="desc_left" >{{$content->desc_left}}</textarea>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                        <label class="text-label">Deskripsi Paragraf Kanan*</label>
                        <textarea class="form-control" rows="5" id="desc_right" name="desc_right" >{{$content->desc_right}}</textarea>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                      <div class="form-group">
                        <label class="text-label">Photo*</label>
                        <img src="{{asset('../storage/'.$content->image1)}}" class="img-thumbnail row mb-3" id="update_image_nasabah" style="height:300px; width:400px;">
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input type="text" class="form-control" id="check" name="check"  value="0" required style="display:none">
                            <input name="file" type="file" class="custom-file-input" id="foto_nasabah"  accept="image/*">
                            <label class="custom-file-label" id="custom-text">{{$content->image1}}</label>
                          </div>
                          <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                      <div class="form-group">
                        <label class="text-label">Photo*</label>
                        <img src="{{asset('../storage/'.$content->image2)}}" class="img-thumbnail row mb-3" id="update_image_nasabah2" style="height:300px; width:400px;">
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input type="text" class="form-control" id="check2" name="check"  value="0" required style="display:none">
                            <input name="file" type="file" class="custom-file-input" id="foto_nasabah2"  accept="image/*">
                            <label class="custom-file-label" id="custom-text2">{{$content->image2}}</label>
                          </div>
                          <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                      <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                      <a href="{{Route('list_intro1')}}" class="btn btn-info" style="float:left;">Back</a>   
                    </div>
                  </div>
                </section>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!--**********************************
    Content body end
***********************************-->
<script type="text/javascript">
    const realFileBtn = document.getElementById("foto_nasabah");
    const customTxt = document.getElementById("custom-text");
    const customImage = document.getElementById("update_image_nasabah");
    const customCheck = document.getElementById("check");
    realFileBtn.addEventListener("change", function(){
      if(realFileBtn.value){
        customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
        customImage.style.display= "none";
        check.value = 1;
      }
    });

    const realFileBtn2 = document.getElementById("foto_nasabah2");
    const customTxt2 = document.getElementById("custom-text2");
    const customImage2 = document.getElementById("update_image_nasabah2");
    const customCheck2 = document.getElementById("check2");
    realFileBtn2.addEventListener("change", function(){
      if(realFileBtn2.value){
        customTxt2.innerHTML = realFileBtn2.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
        customImage2.style.display= "none";
        check2.value = 1;
      }
    });
</script>
@endsection