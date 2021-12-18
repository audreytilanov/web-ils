<?php
$page="Detail Blog"
?>

@extends('layouts.template-blog')
@section('content')

  <section class="page-header">
      <div class="container-xl">
          <div class="text-center">
              <h1 class="mt-0 mb-2">{{ ucfirst($judul) }}</h1>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="/">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($judul) }}</li>
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
                <a href="blog-single.html">
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
                  <li class="list-inline-item"><a style="cursor:default;"><img src="../asset/images/other/author-sm.png" class="author" alt="author"/>ILS TI</a></li>
                  <li class="list-inline-item"><a style="cursor:default;">New Post</a></li>
                  <li class="list-inline-item">{{ date('d-m-Y', strtotime($content->created_at)); }}</li>
                </ul>
                <h5 class="post-title"><a href="blog-single.html">{{ strip_tags($content->title) }}</a></h5>
                <p class="excerpt mb-0">{{ Str::limit($content->desc, 100) }}</p>
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
                  <div class="more-button float-end">
                    <a href="blog-single.html"><span class="icon-options"></span></a>
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