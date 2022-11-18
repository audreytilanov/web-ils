<?php
$page="Home";
$a = 'layouts.template';
?>

@extends('layouts.template-frontend')
@section('content')
<section class="main-banner" id="hero">
    <div class="heroText">
      <h1 class="text-white mt-5 mb-lg-4 text-center" data-aos="zoom-in" data-aos-delay="800">Tentang Kami</h1>
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
      <div class="col-md-12 col-sm-12">
        <!-- post -->
        <div class="post post-list clearfix">
          <div class="thumb rounded">
              <div class="inner">
                <img src="{{  URL::asset('asset/download.jfif')}}" alt="post-title" />
              </div>
          </div>
          <div class="details">
            <ul class="meta list-inline mb-3">
            </ul>
            <h5 class="post-title">Tentang BaliBali Drive Tour</h5>
            <p class="excerpt mb-0">Bali Drive Tour adalah salah satu penyedia jasa pelayanan pariwisata di Bali yang menjadi salah satu penyedia paket Bali tour, kami beroperasi mulai dari tahun 2014 silam, tidak terasa sudah hampir 3 tahun kami malakukan kegiatan ini. ada banyak paket Bali TOUR yang kami sediakan untuk anda semua. tentu saja dengan harga yang bersahabat dan rasional kami akan menemani perjalanan wisata anda.

              selain itu kami juga melayani pemesanan hotel, tiket pesawat, dan transport di bali, anda tidak ingin melakukan Bali tour ? hanya mau menyewa mobil untuk menjemput anda di bandara dan mengantar anda ke tempat tujuan ? serahkan pada kami ! karena kami menyediakan 3 jenis mobil seperti avansa, innova, isuzu ELF.</p>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection