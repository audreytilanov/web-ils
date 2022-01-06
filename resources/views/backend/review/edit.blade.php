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
        <li class="breadcrumb-item"><a href="javascript:void(0)">Content Review</a></li>
      </ol>
    </div>
    <!-- row -->
    @foreach($contents as $content)
    <div class="row">
      <div class="col-xl-12 col-xxl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit List Content Review</h4>
          </div>
          <div class="card-body">
            <form action="{{Route('review.edit.save',['id' => $content->id])}}" method="POST" enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal" >
              @csrf
              <div>
                <section>
                  <div class="row">
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                          <label class="text-label">Quote*</label>
                          <textarea class="form-control" rows="5" id="quote" name="quote" >{{$content->quote}}</textarea>
                        </div>
                      </div>
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                        <label class="text-label">Nama Orang*</label>
                        <input type="text" class="form-control" id="nama_orang" name="nama_orang" aria-describedby="inputGroupPrepend2" value="{{$content->nama_orang}}" required>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <img src="{{URL::asset('asset/review/'.$content->foto)}}" class="img-thumbnail row mb-3" id="update_image_nasabah2" style="height:300px; width:400px;">
                            <input type="file" class="form-control-file" id="image" name="image">
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
                      <a href="{{Route('review.index')}}" class="btn btn-info" style="float:left;">Back</a>   
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