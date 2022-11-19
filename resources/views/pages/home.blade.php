<?php
$page="Home";
$a = 'layouts.template';
?>

@extends('layouts.template-frontend')
@section('content')
<script src="https://use.fontawesome.com/c54c4e7234.js"></script>
<section class="main-banner" id="hero">
  <div class="heroText">
    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">Bali Drive Tour<br>We Are Bali Tour Organizer</h1>
    <p class="text-secondary-white-color" style="font-weight:400!important;" data-aos="fade-up" data-aos-delay="1000">Anda butuh perjalanan wisata yang menyenangkan ? anda butuh tiket murah ?<br>anda butuh car rental yang bisa dipercaya ? anda butuh guide yang handal ?<br>temukan semuanya hanya di Bali Drive Tour, Bali Drive Tour oraganiser andalan anda !<br>kami memberikan pelayanan berkualitas dengan cara yang bersahabat dan profesional.</p>
  </div>
  <div class="videoWrapper">
    <video autoplay="" loop="" muted="" class="custom-video" poster="banner/banner.png">
      <source src="{{  URL::asset('asset/banner/banner.mp4')}}" type="video/mp4">Your browser does not support the video tag.
    </video>
  </div>
  <div class="overlay"></div>
</section>
<section class="page-header" style="background-color: orange">
  <div class="container-xl">
      <div class="text-center">
          <h1 class="mt-0 mb-2 text-white">{{ ucfirst($judul) }}</h1>
          <p class="text-white">
            <span>"</span>Banyak sekali tempat pariwisata yang harus anda kunjungi di Bali, berikut beberapa tempat terpopuler yang banyak di minati para wisatawan domestik maupun mancanegara yang kami telah rangkum menjadi paket paket Bali Drive Tour, apabila anda ingin mengetahui lebih banyak tentang paket Bali Drive Tour dan tujuan tujuan wisata silahkan baca lebih lanjut tentang tempat tempat pariwisata dan paket tour di Bali yang kami sediakan"
          </p>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0">
              </ol>
          </nav>
      </div>
  </div>
</section>
<!-- section main content -->
<section class="main-content" style="padding-top:50px;padding-bottom:50px;background-color:rgb(34, 122, 34);">
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
              <li class="list-inline-item text-white">{{ $content->status; }}</li>
            </ul>
            <h5 class="post-title"><a class="text-white" href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5>
            <p class="excerpt mb-0 text-white" style="font-weight:500;">{{ Str::limit($content->desc, 100) }}</p>
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
<section class="page-header" style="background-color: rgb(69, 69, 69);">
  <div class="container-xl">
      <div class="text-center text-white">
          <h1 class="mt-0 mb-2 text-white">Bali Drive Tour Special Promo</h1>
          <p class="text-white">Bali Drive Tour spesial promo, hi kawan saat ini Bali Drive Tour memberikan Promo Spesial lebaran buat kawan kawan yang ingin berlibur bersama Bali Drive Tour, buat anda yang ingin mendapatkan perjalanan Bali Drive Tour atau bali tour untuk liburan lebaran anda, kami Bali Drive Tour memberikan <span style="font-size: 30px;font-weight:bold;">discount habis habisan Up to 20 %</span> buat anda yang ingin mendapatkan pengalaman Bali Drive Tour dan bali tour terbaik.<br>

          silahkan hubungi kami untuk pemesanan Bali Drive Tour & bali tour dan sampaikan kepada customer service kami bahwa anda pengunjung website Bali Drive Tour yang berhak mendapatkan discount spesial lebaran untuk Bali Drive Tour & bali tour.
          </p>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0">
              </ol>
          </nav>
      </div>
  </div>
</section>
@foreach ($contentMakanan as $content)
<section class="main-banner" style="height: 400px!important" id="hero">
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
@livewire('review')
<section class="main-content" style="margin-top:50px;background-color:orange;color:white!important;">
  <div class="container-xl">
    <div class="text-center">
        <h3 class="mt-0 mb-2 text-white">Kenapa Bali Drive Tour</h3>
        <p class="text-white" style="font-size: 17px;font-weight:400;">kenapa anda harus memilih kami ? kami menyediakan perjalanan Bali Drive Tour yang takkan terlupakan, dengan driver driver berpengalaman dan mengerti seluk beluk Bali anda semua akan mendapatkan Bali Drive Tour yang tak terlupakan.<br>
          Bali Drive Tour menjanjikan perjalanan yang bersahabat dengan cara yang profesional. kami mengerti akan artinya kepuasan perjalanan wisata yang anda lakukan karena kami pun suka berwisata. sampai saat ini Bali Drive Tour memberikan perjalanan wisata yang tepat waktu dan disesuaikan dengan schedule schedule yang kami buat dan rancang untuk anda, atau kalau anda semua ingin menikmati perjalanan wisata dengan rancangan perjalanan anda sendiri kami siap membantu.<br>
          Bali Drive Tour memberikan beberapa destinasi pilihan untuk anda semua yang pastinya telah kami pilah agar anda semua merasa aman dan nyaman sepanjang liburan wisata anda. selain itu kami juga melayani dengan harga bersahabat, serta pelayanan yang akan membuat anda aman dan nyaman.
        </p>
    </div>
  </div>
  <div class="container">
    <div class="padding-30 rounded bordered"  data-aos="fade-right" data-aos-delay="300">
      <div class="row gy-4">
        <div class="col-md-6 col-sm-6">
          <!-- post -->
          <div class="post post-list clearfix">
            <div class="thumb rounded">
                <div class="inner">
                  <i class="fa fa-calendar" style="font-size:200px;"></i>
                </div>
            </div>
            <div class="details">
              <ul class="meta list-inline mb-3">
                <li class="list-inline-item"><a class="text-white" style="cursor:default;font-size:30px;">On Schedule</a></li>
                <li class="list-inline-item"><a class="text-white" style="cursor:default;">Kami suka sesuatu yang teratur, karena itu kami akan memperlakukan anda semua dengan cara yang profesional di Bali Drive Tour anda.</a></li>
                {{-- <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li> --}}
              </ul>
              {{-- <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5> --}}
              {{-- <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
              <br>
              <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <!-- post -->
          <div class="post post-list clearfix">
            <div class="thumb rounded">
                <div class="inner">
                  <i class="fa fa-bullseye" style="font-size:200px;"></i>
                </div>
            </div>
            <div class="details">
              <ul class="meta list-inline mb-3">
                <li class="list-inline-item"><a class="text-white" style="cursor:default;font-size:30px;">Destinasi Pilihan</a></li>
                <li class="list-inline-item"><a class="text-white" style="cursor:default;">Bali Drive Tour memberikan pilihanTempat terindah yang akan selalu membuat anda terpesona.</a></li>
                {{-- <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li> --}}
              </ul>
              {{-- <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5> --}}
              {{-- <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
              <br>
              <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <!-- post -->
          <div class="post post-list clearfix">
            <div class="thumb rounded">
                <div class="inner">
                  <i class="fa fa-money" style="font-size:200px;"></i>
                </div>
            </div>
            <div class="details">
              <ul class="meta list-inline mb-3">
                <li class="list-inline-item"><a class="text-white" style="cursor:default;font-size:30px;">Harga Bersahabat</a></li>
                <li class="list-inline-item"><a class="text-white" style="cursor:default;">Bersama kami Bali Drive Tour anda tidak akan menguras kantong anda, kami selalu memberikan harga yang bersahabat dan rasional tanpa menurunkan kualitas pelayanan kami.</a></li>
                {{-- <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li> --}}
              </ul>
              {{-- <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5> --}}
              {{-- <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
              <br>
              <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <!-- post -->
          <div class="post post-list clearfix">
            <div class="thumb rounded">
                <div class="inner">
                  <i class="fa fa-check-square-o" style="font-size:200px;"></i>
                </div>
            </div>
            <div class="details">
              <ul class="meta list-inline mb-3">
                <li class="list-inline-item"><a class="text-white" style="cursor:default;font-size:30px;">Aman & Nyaman</a></li>
                <li class="list-inline-item"><a class="text-white" style="cursor:default;">Perjalanan wisata Bali Drive Tour yang aman dan nyaman akan anda dapatkan bersama kami, kami melayani anda selayaknya keluarga dengan cara yang profesional.</a></li>
                {{-- <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li> --}}
              </ul>
              {{-- <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5> --}}
              {{-- <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
              <br>
              <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section class="page-header" style="background-color: rgb(69, 69, 69);">
    <div class="container-xl">
        <div class="text-center">
            <h1 class="mt-0 mb-2 text-white" id="">Tentang Kami</h1>
            <p class="text-white">
              Bali Drive Tour adalah salah satu penyedia jasa pelayanan pariwisata di Bali yang menjadi salah satu penyedia paket dan jasa Bali Drive Tour, kami beroperasi mulai dari tahun 2014 silam, tidak terasa sudah hampir 3 tahun kami malakukan kegiatan ini. ada banyak paket Bali Drive Tour yang kami sediakan untuk anda semua. tentu saja dengan harga yang bersahabat dan rasional kami akan menemani perjalanan wisata anda.<br>
              
              selain itu kami juga melayani pemesanan hotel, tiket pesawat, dan transport di Bali, anda tidak ingin melakukan Bali Drive Tour ? hanya mau menyewa mobil untuk menjemput anda di bandara dan mengantar anda ke tempat tujuan ? serahkan pada kami ! karena kami menyediakan 3 jenis mobil seperti avansa, innova, isuzu ELF.
            </p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                </ol>
            </nav>
        </div>
    </div>
  </section>
  <section class="main-content" style="margin-top:50px;">
    <div class="container-xl">
      <div class="text-center">
          <h1 class="mt-0 mb-2">Pelayanan Bali Drive Tour</h1>
          <p style="font-size: 17px">Bali Drive Tour sebagai jasa Bali Drive Tour memberikan beberapa pelayanan yang akan sangat membantu anda dalam perjalanan wisata anda. kami memberikan pelayanan satu atap mulai dari jasa Bali Drive Tour, ticketing, transport, dan beberapa aktivitas pariwisata lainnya. kami menyediakan pelayanan pelayanan tersebut dalam satu atap atau perusahaan yang bernama Bali Drive Tour, jadi apabila anda ingin berlibur kemanapun jangan takut untuk bertanya karena Bali Drive Tour sebagai jasa Bali Drive Tour atau tour & travel di Bali akan selalu siap membantu anda semua.<br>

            beberapa hal yang harus anda ketahui tentang Bali Drive Tour dalam melakukan 4 pelayanan ini adalah, kami Bali Drive Tour sebagai jasa Bali Drive Tour melakukan dan menjalankan pelayanan ini dalam sebuah perusahaan tour & travel resmi jadi anda tidak perlu kuatir akan kemanan dan kenyamanan anda semua.
          </p>
      </div>
    </div>
    <div class="container">
      <div class="padding-30 rounded bordered"  data-aos="fade-right" data-aos-delay="300">
        <div class="row gy-4">
          <div class="col-md-6 col-sm-6">
            <!-- post -->
            <div class="post post-list clearfix">
              <div class="thumb rounded">
                  <div class="inner">
                    <i class="fa fa-plane" style="font-size:200px;"></i>
                  </div>
              </div>
              <div class="details">
                <ul class="meta list-inline mb-3">
                  <li class="list-inline-item"><a style="cursor:default;font-size:30px;">Ticketing</a></li>
                  <li class="list-inline-item"><a style="cursor:default;">kami tawarkan tiket pesawat dengan harga terbaik hanya untuk anda semua bersama Bali Drive Tour anda akan dapatkan itu semua. Pemesanan tiket & Hotel silahkan hubungi 081375042155.</a></li>
                  {{-- <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li> --}}
                </ul>
                {{-- <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5> --}}
                {{-- <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
                <br>
                <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a> --}}
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <!-- post -->
            <div class="post post-list clearfix">
              <div class="thumb rounded">
                  <div class="inner">
                    <i class="fa fa-sun-o" style="font-size:200px;"></i>
                  </div>
              </div>
              <div class="details">
                <ul class="meta list-inline mb-3">
                  <li class="list-inline-item"><a style="cursor:default;font-size:30px;">Paket Tour</a></li>
                  <li class="list-inline-item"><a style="cursor:default;">Dapatkan perjalanan wisata terbaik yang belum pernah anda dapatkan sebelumnya, dengan driver handal dan mengerti arti sebuah liburan. cek paket Bali Drive Tour</a></li>
                  {{-- <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li> --}}
                </ul>
                {{-- <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5> --}}
                {{-- <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
                <br>
                <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a> --}}
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <!-- post -->
            <div class="post post-list clearfix">
              <div class="thumb rounded">
                  <div class="inner">
                    <i class="fa fa-car" style="font-size:180px;"></i>
                  </div>
              </div>
              <div class="details">
                <ul class="meta list-inline mb-3">
                  <li class="list-inline-item"><a style="cursor:default;font-size:30px;">Transport</a></li>
                  <li class="list-inline-item"><a style="cursor:default;">Dapatkan kenyamanan berkendara bersama Bali Drive Tour. Dengan kendaraan terbaik dan bersih kami pastikan perjalanan Bali Drive Tour anda aman & nyaman. Pilih jenis kendaraan</a></li>
                  {{-- <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li> --}}
                </ul>
                {{-- <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5> --}}
                {{-- <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
                <br>
                <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a> --}}
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <!-- post -->
            <div class="post post-list clearfix">
              <div class="thumb rounded">
                  <div class="inner">
                    <i class="fa fa-free-code-camp" style="font-size:150px;"></i>
                  </div>
              </div>
              <div class="details">
                <ul class="meta list-inline mb-3">
                  <li class="list-inline-item"><a style="cursor:default;font-size:30px;">Aktivitas Lain</a></li>
                  <li class="list-inline-item"><a style="cursor:default;">Anda suka Hiking ? atau aktivitas lainnya ? bersama kami semua akan menjadi mungkin. Bali Drive Tour menyediakan pelayanan yang membuat anda terpukau. cek aktivitas</a></li>
                  {{-- <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li> --}}
                </ul>
                {{-- <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5> --}}
                {{-- <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
                <br>
                <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <section class="page-header">
      <div class="container-xl">
          <div class="text-center row">
            <div class="col-lg-3 col-md-3 col-sm-12">
              <h1 class="mt-0 mb-2">1250</h1>
              <p>
                Families Flying
              </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
              <h1 class="mt-0 mb-2">30</h1>
              <p>
                Guides
              </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
              <h1 class="mt-0 mb-2">120</h1>
              <p>
                Operating Plans
              </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
              <h1 class="mt-0 mb-2">400</h1>
              <p>
                Flights
              </p>
            </div>
          </div>
      </div>
    </section>
    <section class="page-header" style="background-color: rgb(69, 69, 69);">
      <div class="container-xl">
          <div class="text-center">
              <h1 class="mt-0 mb-2 text-white">Pilihan Mobil Bali Drive Tour</h1>
              <p class="text-white">
                Bali Drive Tour sebagai salah satu penyedia layanan wisata di Bali yang menjual paket paket Bali  tour, wisata danau toba dan juga beberapa tempat wisata lain memberikan beberapa pilihan kendaraan yang tentu saja kami pastikan membuat anda nyaman sepanjang perjalanan anda.
              </p>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center mb-0">
                  </ol>
              </nav>
          </div>
      </div>
    </section>
    <section class="main-content" style="margin-top:50px;">
      <div class="container">
        <div class="padding-30 rounded bordered"  data-aos="fade-right" data-aos-delay="300">
          <div class="row gy-4">
            @foreach ($contentMobil as $content)
                
            
            <div class="col-md-6 col-sm-6">
              <!-- post -->
              <div class="post post-list clearfix">
                <div class="thumb rounded">
                  {{-- <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}"> --}}
                    <div class="inner">
                      @if ($content->image)
                      <img src="{{ URL::asset('asset/desa/'.$content->image) }}" alt="post-title" />
                      @else
                      <h4>Image Not Found</h4>
                      @endif
                    </div>
                  {{-- </a> --}}
                </div>
                <div class="details">
                  <ul class="meta list-inline mb-3">
                    <li class="list-inline-item"><h3>{{ $content->slug }}</h3><br><b>{{ $content->title }} | Rp. {{ $content->sub_title }}</b></li>
                  </ul>
                  {{-- <h5 class="post-title"><a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}">{{ strip_tags($content->title) }}</a></h5> --}}
                  <p class="excerpt mb-0">{{ $content->desc_left }}</p>
                  <br>
                  {{-- <a href="{{ route('makanan.detail', ['slug'=>$content->slug]) }}" class="btn btn-warning text-white hover-more" style="border-radius:50px;padding-left:10px!important;padding-right:10px!important;">&nbsp;&nbsp;&nbsp;Cek Paket&nbsp;&nbsp;&nbsp;</a> --}}
      
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