<?php
$title = 'ILS 2021 | Admin';
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
                    <li class="breadcrumb-item active"><a href="#">Content Gallery Video</a></li>
                </ol>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success mt-2">
                    {{ session()->get('success') }}
                </div>
            @endif
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table Content Gallery Video</h4>
                        @if (auth()->user()->userHasPermissions->where('component_name', 'gallery_video')->where('permissions', 'can add')->isNotEmpty())
                            <a href="{{ Route('video.add') }}">
                                <div class="btn btn-primary">Add Content Gallery Video</div>
                            </a>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Link Youtube</th>
                                        <th>Level Post</th>
                                        <th>Status Aktif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contents as $content)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $content->title }}</td>
                                            <td><img src="{{ URL::asset('asset/gallery-video/' . $content->image) }}"
                                                    alt="{{ $content->image }}" width="100px" height="auto"></td>
                                            <td>
                                                {{ $content->link_yt }}
                                            </td>
                                            <td>{{ $content->status }}</td>
                                            @if ($content->status_aktif == 0)
                                                <td class="text-warning">Nonaktif</td>
                                            @elseif ($content->status_aktif == 1)
                                                <td class="text-success">Aktif</td>
                                            @else
                                                <td class="text-primary">Undefined (!0/1)</td>
                                            @endif
                                            <td>
                                                <div class="d-flex">
                                                    @if (auth()->user()->userHasPermissions->where('component_name', 'gallery_video')->where('permissions', 'can edit')->isNotEmpty())
                                                        <a href="{{ Route('video.edit', $content->id) }}"
                                                            class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                class="fa fa-pencil"></i></a>
                                                    @endif
                                                    @if (auth()->user()->userHasPermissions->where('component_name', 'gallery_video')->where('permissions', 'can delete')->isNotEmpty())
                                                        <div class="sweetalert">
                                                            <form action="{{ Route('video.delete', $content->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="submit"
                                                                    onclick="return confirm('Yakin Ingin Mengapus Data?')"
                                                                    class="btn btn-danger shadow btn-xs sharp sweet-success-cancel"><i
                                                                        class="fa fa-trash"></i></button>
                                                            </form>
                                                        </div>
                                                    @endif
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
