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
            <h4 class="card-title">Table Content Pantai</h4>
            <a href="{{Route('pantai.add')}}"><div class="btn btn-primary">Add Content Pantai</div></a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-responsive-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Gambar</th>
                </tr>
              </thead>
              <tbody>
              @foreach($contents as $content)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td><img src="{{URL::asset('asset/pantai/'.$content->image)}}" alt="" width="350px"></td>
                <td>
                  <div class="d-flex">
                    <div class="sweetalert">
                      <form action="{{Route('pantai.child.delete',['id' => $content->id, 'parent_id'=>$content->parent_id])}}" method="POST">
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
<div class="content-body">
    <div class="container-fluid">
      <!-- row -->
      <div class="row">
        <div class="col-xl-12 col-xxl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Add Pantai Child Image</h4>
            </div>
            <div class="card-body">
              <form action="{{Route('pantai.child.add',['id' =>$content->parent_id])}}" method="POST" enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal">
                @csrf
                <div>
                  <section>
                    <div class="row">
                      <div class="col-lg-12 mb-2">
                          <div class="form-group">
                              <label for="image1">Image</label>
                              <input type="file" class="form-control-file" id="image" name="image" required>
                          </div>
                      </div>
                      <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                        <a href="{{Route('pantai.index')}}" class="btn btn-info" style="float:left;">Back</a>   
                      </div>
                    </div>
                  </section>
                </div>
              </form>
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

    