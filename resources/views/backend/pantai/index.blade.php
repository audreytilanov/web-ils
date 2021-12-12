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
        <li class="breadcrumb-item active"><a href="#">Content Pantai</a></li>
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
            <h4 class="card-title">Table Content Wisata Hiburan</h4>
            <a href="{{Route('pantai.add')}}"><div class="btn btn-primary">Add Content Wisata Hiburan</div></a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-responsive-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Deskripsi Kiri</th>
                  <th>Deskripsi Kanan</th>
                  {{-- <th>List Image</th> --}}
                  <th>Filter</th>
                  <th>Status Konten</th>
                </tr>
              </thead>
              <tbody>
              @foreach($contents as $content)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$content->title}}</td>
                <td>{{$content->sub_title}}</td>
                <td>{{Str::words($content->desc_left, $words = 20, $end = '...')}}</td>
                <td>{{Str::words($content->desc_right, $words = 20, $end = '...')}}</td>
                {{-- <td>
                    <img src="{{URL::asset('asset/pantai/'.$content->image)}}" alt="{{ $content->image }}" width="100px" height="auto">
                </td> --}}
                <td>{{$content->filter}}</td>
                <td>{{$content->status_tingkatan}}</td>
                @if ($content->status_aktif == 0)
                  <td class="text-warning">Nonaktif</td>
                @elseif ($content->status_aktif == 1)
                  <td class="text-success">Aktif</td>
                @else 
                  <td class="text-primary">Undefined (!0/1)</td>
                @endif
                <td>
                  <div class="d-flex">
                    <a href="{{Route('wisata.edit', $content->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                    <div class="sweetalert">
                      <form action="{{Route('wisata.delete', $content->id)}}" method="POST">
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

    