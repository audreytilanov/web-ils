<?php
$page="Home";
$a = 'layouts.template';
?>

@extends('layouts.template-frontend')
@section('content')

  @foreach($contents as $content)
  @if($content->status_aktif == "aktif")
    @livewire($content->nama_component)
  @endif
  @endforeach

@endsection