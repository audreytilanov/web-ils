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
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit User</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit User</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.update', $user->id) }}" method="POST" id="step-form-horizontal"
                                class="step-form-horizontal">
                                @csrf
                                <div>
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Name*</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        aria-describedby="inputGroupPrepend2" required
                                                        value="{{ old('name', $user->name) }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Email*</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        aria-describedby="inputGroupPrepend2" required
                                                        value="{{ old('email', $user->email) }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Apakah Admin*</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="true"
                                                            id="isAdmin-1" name="isAdmin"
                                                            {{ $user->userHasPermissions->where('component_name', 'user')->where('permissions', 'admin')->isNotEmpty()
                                                                ? 'checked'
                                                                : '' }}>
                                                        <label class="form-check-label" for="isAdmin-1">
                                                            Iya
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" value="false"
                                                            id="isAdmin-2" name="isAdmin">
                                                        <label class="form-check-label" for="isAdmin-2">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row justify-content-between">
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Intro 1*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="intro1-1" name="intro1[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'intro1')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="intro1-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="intro1-2" name="intro1[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'intro1')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="intro1-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="intro1-3" name="intro1[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'intro1')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="intro1-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Intro 2*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="intro2-1" name="intro2[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'intro2')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="intro2-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="intro2-2" name="intro2[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'intro2')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="intro2-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="intro2-3" name="intro2[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'intro2')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="intro2-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component
                                                                Pembangungan*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="pembangunan-1" name="pembangunan[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'pembangunan')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="pembangunan-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="pembangunan-2" name="pembangunan[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'pembangunan')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="pembangunan-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="pembangunan-3"
                                                                    name="pembangunan[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'pembangunan')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="pembangunan-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Sejarah*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="sejarah-1" name="sejarah[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'sejarah')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="sejarah-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="sejarah-2" name="sejarah[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'sejarah')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="sejarah-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="sejarah-3" name="sejarah[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'sejarah')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="sejarah-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Tempat Wisata
                                                                Hiburan*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="wisata_hiburan-1"
                                                                    name="wisata_hiburan[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'wisata_hiburan')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="wisata_hiburan-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="wisata_hiburan-2"
                                                                    name="wisata_hiburan[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'wisata_hiburan')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="wisata_hiburan-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="wisata_hiburan-3"
                                                                    name="wisata_hiburan[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'wisata_hiburan')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="wisata_hiburan-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Pantai*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="pantai-1" name="pantai[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'pantai')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="pantai-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="pantai-2" name="pantai[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'pantai')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="pantai-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="pantai-3" name="pantai[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'pantai')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="pantai-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Desa*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="desa-1" name="desa[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'desa')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="desa-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="desa-2" name="desa[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'desa')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="desa-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="desa-3" name="desa[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'desa')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="desa-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Pura*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="pura-1" name="pura[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'pura')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="pura-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="pura-2" name="pura[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'pura')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="pura-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="pura-3" name="pura[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'pura')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="pura-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Makanan
                                                                Khas*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="makanan_khas-1"
                                                                    name="makanan_khas[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'makanan_khas')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="makanan_khas-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="makanan_khas-2"
                                                                    name="makanan_khas[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'makanan_khas')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="makanan_khas-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="makanan_khas-3"
                                                                    name="makanan_khas[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'makanan_khas')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="makanan_khas-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Gallery
                                                                Video*</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="gallery_video-1"
                                                                    name="gallery_video[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'gallery_video')->where('permissions', 'can edit')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="gallery_video-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="gallery_video-2"
                                                                    name="gallery_video[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'gallery_video')->where('permissions', 'can add')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="gallery_video-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="gallery_video-3"
                                                                    name="gallery_video[]"
                                                                    {{ $user->userHasPermissions->where('component_name', 'gallery_video')->where('permissions', 'can delete')->isNotEmpty()
                                                                        ? 'checked'
                                                                        : '' }}>
                                                                <label class="form-check-label" for="gallery_video-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">Akses Component Review</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can edit" id="review-1" name="review[]">
                                                                <label class="form-check-label" for="review-1">
                                                                    Dapat mengedit
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can add" id="review-2" name="review[]">
                                                                <label class="form-check-label" for="review-2">
                                                                    Dapat menambahkan
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="can delete" id="review-3" name="review[]">
                                                                <label class="form-check-label" for="review-3">
                                                                    Dapat menghapus
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
