<?php
$page="Home";
$a = 'layouts.template';
?>

@extends('layouts.template-frontend')
@section('content')
<section class="main-banner" id="hero">
  <div class="heroText">
    <h1 class="text-white mt-5 mb-lg-4 text-center" data-aos="zoom-in" data-aos-delay="800">Paket Makanan</h1>
  </div>
  <div class="videoWrapper">
    <video autoplay="" loop="" muted="" class="custom-video" poster="banner/banner.png">
      <source src="{{  URL::asset('asset/banner/banner.mp4')}}" type="video/mp4">Your browser does not support the video tag.
    </video>
  </div>
  <div class="overlay"></div>
</section>
<section class="page-header">
  <div class="container-xl">
      <div class="text-center">
          <h1 class="mt-0 mb-2">Makanan</h1>
          <p>
            <span>"</span>Silahkan cek paket makanan dari Bali yang kami sediakan di bawah ini, butuh paket yang lain atau ada permintaan khusus silahkan hubungi kami melalui kontak yang tersedia pada bagian bawah website kami. - Bali Drive Tour
          </p>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0">
              </ol>
          </nav>
      </div>
  </div>
</section>
<!-- section main content -->
@foreach ($content as $content)
<section class="main-banner" style="height: 350px!important" id="hero">
    <div class="heroText">
      <h1 class="text-white mt-5 mb-lg-4 text-center" data-aos="zoom-in" data-aos-delay="800">{{ strip_tags($content->title) }}</h1>
      <p class="excerpt mb-0 text-white text-center">{{ $content->desc_left }}</p>

    </div>
    <div class="videoWrapper">
      <img src="{{  URL::asset('asset/wisata-hiburan/'.$content->image)}}" alt="">
    </div>
    <div class="overlay"></div>
  </section>
  @endforeach

@endsection