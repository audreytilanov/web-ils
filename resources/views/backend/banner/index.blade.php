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
                    <li class="breadcrumb-item active"><a href="#">Content Intro I</a></li>
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
                        <h4 class="card-title">Table Content Intro I</h4>
                        <a href="{{ Route('add_contentIntro1') }}">
                            <div class="btn btn-primary">Add Content Intro I</div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contents as $content)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $content->title }}</td>
                                            <td>{{ $content->sub_title }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ Route('edit_banner', $content->id) }}"
                                                        class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <div class="sweetalert">
                                                        <form action="{{ Route('delete_content_intro1', $content->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                onclick="return confirm('Yakin Ingin Mengapus Data?')"
                                                                class="btn btn-danger shadow btn-xs sharp sweet-success-cancel"><i
                                                                    class="fa fa-trash"></i></button>
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
