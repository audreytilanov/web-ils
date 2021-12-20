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
        <li class="breadcrumb-item"><a href="javascript:void(0)">Content Pembangunan</a></li>
      </ol>
    </div>
    <!-- row -->
    {{-- @foreach($contents as $content) --}}
    <div class="row">
      <div class="col-xl-12 col-xxl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit List Content Pembangunan</h4>
          </div>
          <div class="card-body">
            <form action="{{Route('save_editcontentPembangunan',['id'=> $content->id])}}" method="POST" enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal" >
              @csrf
              <div>
                <section>
                  <div class="row">
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                        <label class="text-label">slug*</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Ex. pantai-sanur" value="{{ $content->slug }}" aria-describedby="inputGroupPrepend2" required>
                      </div>
                    </div>
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
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                          <label class="text-label">Sumber*</label>
                          <input type="text" class="form-control" id="sumber" name="sumber" placeholder="Jika Karya Sendiri, Tulislah Nama Anda" aria-describedby="inputGroupPrepend2" value="{{ $content->sumber }}" required>
                      </div>
                  </div>
                    <div class="col-lg-12 mb-3">
                      <div class="form-group">
                        <label class="text-label">Image 1* (Preview File Lama - Bukan yang Baru</label>
                        <img src="{{URL::asset('asset/pembangunan/'.$content->image1)}}" class="img-thumbnail row mb-3" id="image1" style="height:300px; width:400px;">
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input type="file" class="form-control-file" id="image1" name="image1" accept="image/*">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                      <div class="form-group">
                        <label class="text-label">Image 2* (Preview File Lama - Bukan yang Baru)</label>
                        <img src="{{URL::asset('asset/pembangunan/'.$content->image2)}}" class="img-thumbnail row mb-3" id="image2" style="height:300px; width:400px;">
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input type="file" class="form-control-file" id="image2" name="image2" accept="image/*">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                        <label class="text-label">Status Aktif*</label>
                        <div class="dropdown bootstrap-select form-control dropup">
                          <select name="status_aktif" id="status_aktif" class="form-control" tabindex="-98">
                              <option selected value="" disabled>Pilih Status Aktif</option>
                              <option value="1" @if ($content->status_aktif == 1) {{'selected="selected"'}} @endif >Aktif</option>
                              <option value="0" @if ($content->status_aktif == 0) {{'selected="selected"'}} @endif >Nonaktif</option>
                          </select>
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
    {{-- @endforeach --}}
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