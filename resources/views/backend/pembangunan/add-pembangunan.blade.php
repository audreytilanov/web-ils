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
    <div class="row">
      <div class="col-xl-12 col-xxl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Add Pembangunan</h4>
          </div>
          <div class="card-body">
            <form action="{{Route('save_addcontentPembangunan')}}" method="POST"  enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal">
              @csrf
              <div>
                <section>
                  <div class="row">
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label class="text-label">title*</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label class="text-label">Deskripsi Kiri*</label>
                            <textarea class="form-control" rows="5" id="desc_left" name="desc_left" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                          <label class="text-label">Deskripsi Kanan*</label>
                          <textarea class="form-control" rows="5" id="desc_right" name="desc_right" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label class="text-label">Sumber*</label>
                            <input type="text" class="form-control" id="sumber" name="sumber" placeholder="Jika Karya Sendiri, Tulislah Nama Anda" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label for="image1">Image 1*</label>
                            <input type="file" class="form-control-file" id="image1" name="image1" required>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label for="image2">Image 2*</label>
                            <input type="file" class="form-control-file" id="image2" name="image2" required>
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
  </div>
</div>

<!--**********************************
    Content body end
***********************************-->
@endsection