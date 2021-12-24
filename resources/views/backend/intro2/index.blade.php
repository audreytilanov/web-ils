<?php
  $title="ILS 2021 | Admin";
?>

@extends('layouts.template')
@section('content')
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
  <div class="container-fluid">
    <div class="page-titles">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
        <li class="breadcrumb-item active"><a href="#">Content Intro 2</a></li>
      </ol>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success mt-2">
            {{ session()->get('success') }}
        </div>
    @endif
    <!-- row -->
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">Table Content Intro I</h4>
            <a href="{{Route('add_contentIntro2')}}"><div class="btn btn-primary">Add Content Intro I</div></a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-responsive-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Deskripsi</th>
                  <th>Image</th>
                  <th>Level Post</th>
                  <th>Status Aktif</th>
                </tr>
              </thead>
              <tbody>
              @foreach($contents as $content)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$content->title}}</td>
                <td>{{Str::words($content->desc, $words = 20, $end = '...')}}</td>
                <td><img src="{{URL::asset('asset/intro2/'.$content->image)}}" alt="{{ $content->image }}" width="100px" height="auto"></td>
                <td>{{$content->status}}</td>
                @if ($content->status_aktif == 0)
                  <td class="text-warning">Nonaktif</td>
                @elseif ($content->status_aktif == 1)
                  <td class="text-success">Aktif</td>
                @else 
                  <td class="text-primary">Undefined (!0/1)</td>
                @endif
                <td>
                  <div class="d-flex">
                    <a href="{{Route('edit_contentIntro2', $content->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                    <div class="sweetalert">
                      <form action="{{Route('delete_content_intro2', $content->id)}}" method="post">
                        @csrf
                        <button type="submit" onclick="return confirm('Yakin Ingin Mengapus Data?')" class="btn btn-danger shadow btn-xs sharp sweet-success-cancel"><i class="fa fa-trash"></i></button>                 
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--**********************************
    Content body end
***********************************-->
@endsection

    