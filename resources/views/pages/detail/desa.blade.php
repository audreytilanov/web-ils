<?php
$page="Detail Blog"
?>

@extends('layouts.template-blog')
@section('content')

    
      <!-- section main content -->
      <section class="main-content section-switch" style="margin-bottom:100px;">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-8">
                <!-- post single -->
              <div class="post post-single">
                <!-- post header -->
                <div class="post-header">
                  <h1 class="title mt-0">{!! $content->title !!}</h1> 
                  <ul class="meta list-inline mb-0">
                    <li class="list-inline-item"><a href="#"><img src="{{ URL::asset('asset/images/other/author-sm.png') }}" class="author" alt="author"/>ILS TI</a></li>
                    <li class="list-inline-item"><a href="{{ route('desa.view') }}">{{ $judul }}</a></li>
                    <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li>
                  </ul>
                </div>
                <!-- featured image -->
                <div class="featured-image">
                  <img width="600px" src="{{ URL::asset('asset/desa/'.$content->image)}}" alt="post-title" />
                </div>
                <!-- post content -->
                <div class="post-content clearfix">
                <p style="text-align: justify;">&emsp;&emsp;&emsp;{!! $content->sub_title !!}</p>
                  <p style="text-align: justify;">&emsp;&emsp;&emsp;{!! $content->desc_left !!}</p>

                  <p style="text-align: justify;">&emsp;&emsp;&emsp;{!! $content->desc_right !!}</p>

                </div>
                <!-- post bottom section -->
                <div class="post-bottom">
                  <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-12 text-center text-md-start">
                      <!-- tags -->
                      <a href="#" class="tag"></a>
                      <a href="#" class="tag"></a>
                      <a href="#" class="tag"></a>
                    </div>
                    <div class="col-md-6 col-12">
                      <!-- social icons -->
                      <ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
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
            <div class="col-lg-4">  
              <!-- sidebar -->
              <div class="sidebar"  data-aos="fade-left" data-aos-delay="100">
                <!-- widget popular posts -->
                <div class="widget rounded"  data-aos="fade-left" data-aos-delay="400">
                  <div class="widget-header text-center">
                    <h3 class="widget-title">Popular Posts</h3>
                  </div>
                  <div class="widget-content">
                    <!-- post -->
                    @foreach ($contentLimit as $item)
                    <div class="post post-list-sm circle">
                      <div class="thumb circle">
                        <span class="number">{{ $loop->iteration }}</span>
                        <a href="{{ route('desa.detail', ['slug'=>$item->slug]) }}">
                          <div class="inner">
                            <img src="{{ URL::asset('asset/desa/'.$item->image) }}" alt="post-title" />
                          </div>
                        </a>
                      </div>
                      <div class="details clearfix">
                        <h6 class="post-title my-0"><a href="{{ route('desa.detail', ['slug'=>$item->slug]) }}">{{ $item->title }}</a></h6>
                        <ul class="meta list-inline mt-1 mb-0">
                          <li class="list-inline-item">{{ date('d-m-Y', strtotime($item->created_at)); }}</li>
                        </ul>
                      </div>
                    </div>
                    @endforeach
                  </div>		
                </div>
                <!-- widget categories -->
                @livewire('explore-topics')
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection