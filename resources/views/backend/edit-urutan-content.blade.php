<?php
  $title="ILS 2021 | Admin";
  $list_contents=['intro1', 'intro2', 'pembangunan', 'sejarah', 'tempat-wisata-hiburan', 'pantai', 'desa', 'pura', 'makanan-khas', 'gallery-video'];
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
        <li class="breadcrumb-item"><a href="javascript:void(0)">List Content</a></li>
      </ol>
    </div>
    <!-- row -->
    @foreach($contents as $content)
    <div class="row">
      <div class="col-xl-12 col-xxl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Add List Content</h4>
          </div>
          <div class="card-body">
            <form action="{{Route('save_editcontent', $content->id)}}" method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">
              @csrf
              <div>
                <section>
                  <div class="row">
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                        <label class="text-label">Nama Component / Section*</label>
                        <div class="dropdown bootstrap-select form-control dropup">
                          <select name="nama_component" id="nama_component" class="form-control" tabindex="-98">
                            <option selected value="" disabled>Pilih section content</option>
                            @foreach($list_contents as $list_content)
                              <option value="{{$list_content}}" @if ($content->nama_component == $list_content) {{'selected="selected"'}} @endif >{{$list_content}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                          <label class="text-label">Status Component / Section*</label>
                          <div class="dropdown bootstrap-select form-control dropup">
                          <select name="status_aktif" id="status_aktif" class="form-control" tabindex="-98">
                            <option selected value="" disabled>Pilih status section</option>
                            <option value="aktif" {{$content->status_aktif == 'aktif' ? 'selected' : ''}}>Aktif</option>
                            <option value="nonaktif" {{$content->status_aktif == 'nonaktif' ? 'selected' : ''}}>Nonaktif</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                      <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                      <a href="{{Route('home_admin')}}" class="btn btn-info" style="float:left;">Back</a>     
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