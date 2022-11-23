<?php
$page="Home";
$a = 'layouts.template';
?>

@extends('layouts.template-frontend')
@section('content')
<section class="main-banner" id="hero">
  <div class="heroText">
    <h1 class="text-white mt-5 mb-lg-4 text-center" data-aos="zoom-in" data-aos-delay="800">Hubungi Kami</h1>
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
          
      
      <div class="col-md-6 col-sm-6">
        <!-- post -->
        <form action="{{Route('save_addcontentPembangunan')}}" method="POST"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subject</label>
            <input type="text" class="form-control" name="subject">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Message</label>
            <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email">
          </div>
          <button type="submit" class="btn btn-warning">Submit</button>
        </form>
      </div>
      <div class="col-md-6 col-sm-6">
        <h5>Jl. By Pass i Gusti Ngurah Ray Mumbul Nusa Dua</h5>
        <h5>Whatsapp : 08237530038</h5>
        {{-- <h6>Ticketing : BCA 8280006549 an.Richard E P Sinaga</h6> --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.004203556583!2d115.20020521478487!3d-8.785673293689861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf95d67e8b6b0b0d5!2zOMKwNDcnMDguNCJTIDExNcKwMTInMDguNiJF!5e0!3m2!1sid!2sid!4v1668757074684!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </div>
  </div>
</div>
</section>

@endsection