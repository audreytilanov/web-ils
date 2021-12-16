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
            @include('components.blog')
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
                    <div class="post post-list-sm circle">
                      <div class="thumb circle">
                        <span class="number">1</span>
                        <a href="blog-single.html">
                          <div class="inner">
                            <img src="../asset/images/posts/tabs-1.jpg" alt="post-title" />
                          </div>
                        </a>
                      </div>
                      <div class="details clearfix">
                        <h6 class="post-title my-0"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h6>
                        <ul class="meta list-inline mt-1 mb-0">
                          <li class="list-inline-item">29 March 2021</li>
                        </ul>
                      </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                      <div class="thumb circle">
                        <span class="number">2</span>
                        <a href="blog-single.html">
                          <div class="inner">
                            <img src="../asset/images/posts/tabs-2.jpg" alt="post-title" />
                          </div>
                        </a>
                      </div>
                      <div class="details clearfix">
                        <h6 class="post-title my-0"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h6>
                        <ul class="meta list-inline mt-1 mb-0">
                          <li class="list-inline-item">29 March 2021</li>
                        </ul>
                      </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                      <div class="thumb circle">
                        <span class="number">3</span>
                        <a href="blog-single.html">
                          <div class="inner">
                            <img src="../asset/images/posts/tabs-3.jpg" alt="post-title" />
                          </div>
                        </a>
                      </div>
                      <div class="details clearfix">
                        <h6 class="post-title my-0"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h6>
                        <ul class="meta list-inline mt-1 mb-0">
                          <li class="list-inline-item">29 March 2021</li>
                        </ul>
                      </div>
                    </div>
                  </div>		
                </div>
                <!-- widget categories -->
                <div class="widget rounded"  data-aos="fade-left" data-aos-delay="400">
                  <div class="widget-header text-center">
                    <h3 class="widget-title">Explore Topics</h3>
                  </div>
                  <div class="widget-content">
                    <ul class="list">
                      <li><a href="#">All</a><span>(20)</span></li>
                      <li><a href="#">Beach</a><span>(2)</span></li>
                      <li><a href="#">Temple</a><span>(4)</span></li>
                      <li><a href="#">Food</a><span>(1)</span></li>
                      <li><a href="#">Culture</a><span>(7)</span></li>
                      <li><a href="#">Hotel</a><span>(3)</span></li>
                    </ul>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection