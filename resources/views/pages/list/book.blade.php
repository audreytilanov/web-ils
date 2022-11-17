<?php
$page="Home";
$a = 'layouts.template';
?>

@extends('layouts.template-frontend')
@section('content')
<section class="main-banner" id="hero">
  <div class="heroText">
    <h1 class="text-white mt-5 mb-lg-4 text-center" data-aos="zoom-in" data-aos-delay="800">Book Now!</h1>
  </div>
  <div class="videoWrapper">
    <video autoplay="" loop="" muted="" class="custom-video" poster="banner/banner.png">
      <source src="{{  URL::asset('asset/banner/banner.mp4')}}" type="video/mp4">Your browser does not support the video tag.
    </video>
  </div>
  <div class="overlay"></div>
</section>

<!-- section main content -->
<section class="main-content" style="margin-top:50px;">
<div class="container">
  <div class="padding-30 rounded bordered"  data-aos="fade-right" data-aos-delay="300">
    <div class="row gy-4">
          
      
      <div class="col-md-10 col-sm-10">
        <!-- post -->
        <form action="{{Route('sejarah.add.save')}}" method="POST"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Paket</label>
            <input type="text" class="form-control" name="paket">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Start</label>
            <input type="text" class="form-control" name="start">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mobil</label>
            <input type="text" class="form-control" name="mobil">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Special Request</label>
            <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-warning">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</section>

@endsection