<?php
$page="Home";
$a = 'layouts.template';
?>

@extends('layouts.template-frontend')
@section('content')

  @foreach($contents as $content)
  @if($content->status_aktif == "aktif")
    @if($content->nama_component == "intro1")
      @livewire('intro1')
    @elseif($content->nama_component == "intro2")
      @livewire('intro2')
    @elseif($content->nama_component == "pembangunan")
      @livewire('pembangunan')
    @elseif($content->nama_component == "sejarah")
      @livewire('sejarah')
    @elseif($content->nama_component == "tempat-wisata-hiburan")
      @livewire('tempat-wisata-hiburan')
    @elseif($content->nama_component == "pantai")
      @livewire('pantai')
    @elseif($content->nama_component == "desa")
      @livewire('desa')
    @elseif($content->nama_component == "pura")
      @livewire('pura')
    @elseif($content->nama_component == "makanan-khas")
      @livewire('makanan-khas')
    @elseif($content->nama_component == "gallery-video")
      @livewire('gallery-video')
    @endif
  @endif
  @endforeach

@endsection