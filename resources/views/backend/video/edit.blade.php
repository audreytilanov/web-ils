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
        <li class="breadcrumb-item"><a href="javascript:void(0)">Content Gallery Video</a></li>
      </ol>
    </div>
    <!-- row -->
    @foreach($contents as $content)
    <div class="row">
      <div class="col-xl-12 col-xxl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit List Content Gallery Video</h4>
          </div>
          <div class="card-body">
            <form action="{{Route('video.edit.save',['id' => $content->id])}}" method="POST" enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal" >
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
                            <label for="image">Image</label>
                            <img src="{{URL::asset('asset/gallery-video/'.$content->image)}}" class="img-thumbnail row mb-3" id="video-image" style="height:300px; width:400px;">
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                          <label class="text-label">Link Youtube*</label>
                          <input type="text" class="form-control" id="link_yt" name="link_yt" aria-describedby="inputGroupPrepend2" value="{{$content->link_yt}}" required>
                        </div>
                      </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                          <label class="text-label">Status*</label>
                          <div class="dropdown bootstrap-select form-control dropup">
                                @if ($count == 1)
                                    <h5 class="text-danger">Status Header Hanya Untuk 1 Data</h5>
                                    <input type="hidden" class="form-control" id="title" name="status" aria-describedby="inputGroupPrepend2" value="sub" required>
                                @else
                                    <select name="status" id="status" class="form-control" tabindex="-98">
                                        <option selected value="" disabled>Pilih Status</option>
                                        <option value="sub" @if ($content->status == "sub") {{'selected="selected"'}} @endif >Sub</option>
                                        <option value="header" @if ($content->status == "header") {{'selected="selected"'}} @endif >Primary</option>
                                    </select>
                                @endif
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
                    </div>
                    <div class="col-lg-12 mb-3">
                      <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                      <a href="{{Route('video.index')}}" class="btn btn-info" style="float:left;">Back</a>   
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
@endsection