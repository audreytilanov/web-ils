<?php
$page="Home";
$a = 'layouts.template';
?>

@extends('layouts.template-frontend')
@section('content')
<section class="main-banner" id="hero">
  <div class="heroText">
    <h1 class="text-white mt-5 mb-lg-4 text-center" data-aos="zoom-in" data-aos-delay="800">Paket Tour</h1>
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
          <h1 class="mt-0 mb-2">{{ ucfirst($judul) }}</h1>
          <p>
            <span>"</span>Silahkan cek paket Bali tour dan wisata Bali yang kami sediakan di bawah ini, butuh paket yang lain atau ada permintaan khusus silahkan hubungi kami melalui kontak yang tersedia pada bagian bawah website kami. - Bali Drive Tour
          </p>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0">
              </ol>
          </nav>
      </div>
  </div>
</section>
<!-- section main content -->
<section class="main-content" style="margin-top:50px;">
<div class="container">
  <div class="padding-30 rounded bordered"  data-aos="fade-right" data-aos-delay="300">
    <div class="row gy-4">
      @foreach ($content as $content)
          
      
      <div class="col-md-6 col-sm-6">
        <!-- post -->
        <div class="post post-list clearfix">
          <div class="thumb rounded">
            <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">
              <div class="inner">
                @if ($content->image)
                <img src="{{ URL::asset('asset/food/'.$content->image) }}" alt="post-title" />
                @else
                <h4>Image Not Found</h4>
                @endif
              </div>
            </a>
          </div>
          <div class="details">
            <ul class="meta list-inline mb-3">
              <li class="list-inline-item"><a style="cursor:default;">balidrivetour</a></li>
              <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li>
            </ul>
            <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5>
            <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
            <br>
            <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a>

            <div class="post-bottom clearfix d-flex align-items-center">
              <div class="social-share me-auto">
                <button class="toggle-button icon-share"></button>
                <ul class="icons list-unstyled list-inline mb-0">
                  <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
</section>

@endsection