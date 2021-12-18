<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PuraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Intro1Controller;
use App\Http\Controllers\Intro2Controller;
use App\Http\Controllers\PantaiController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\PembangunanController;
use App\Http\Controllers\GalleryVideoController;
use App\Http\Controllers\WisataHiburanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/detail-blog', [UserController::class, 'view_detailBlog'])->name('detail-blog');

// LIST CONTENT
Route::get('/list-blog/sejarah', [UserController::class, 'sejarah'])->name('sejarah.view');
Route::get('/list-blog/wisata-hiburan', [UserController::class, 'wisata'])->name('wisata.view');
Route::get('/list-blog/pantai', [UserController::class, 'pantai'])->name('pantai.view');
Route::get('/list-blog/desa', [UserController::class, 'desa'])->name('desa.view');
Route::get('/list-blog/pura', [UserController::class, 'pura'])->name('pura.view');
Route::get('/list-blog/makanan', [UserController::class, 'makanan'])->name('makanan.view');

// DETAIL CONTENT
Route::get('/detail-blog/sejarah/{slug}-{id}', [UserController::class, 'sejarahDetail'])->name('sejarah.detail');
Route::get('/detail-blog/wisata/{slug}-{id}', [UserController::class, 'wisataDetail'])->name('wisata.detail');


Route::group(['middleware'=>'auth'], function(){
    // list content
    Route::get('/contentAdmin', [HomeController::class, 'index'])->name('home_admin');

    //create list content
    Route::get('/contentAdmin/add-content', [ContentController::class, 'add_content'])->name('add_content');
    Route::post('/save_addcontent', [ContentController::class, 'save_addcontent'])->name('save_addcontent');

    // edit list content
    Route::get('/contentAdmin/edit-content-{id}', [ContentController::class, 'edit_content'])->name('edit_content');
    Route::post('/contentAdmin/save_addcontent-{id}', [ContentController::class, 'save_editcontent'])->name('save_editcontent');

    //delete list content
    Route::post('/contentAdmin/delete-content-{id}', [ContentController::class, 'delete_content'])->name('delete_content');

    //--------------------- Intro 1 ----------------------
    // list content intro1
    Route::get('/contentAdmin/list-content-intro1', [Intro1Controller::class, 'index'])->name('list_intro1');

    //create / add intro 1
    Route::get('/contentAdmin/add-contentIntro1', [Intro1Controller::class, 'add_content'])->name('add_contentIntro1');
    Route::post('/save_addcontentintro1', [Intro1Controller::class, 'save_addcontent'])->name('save_addcontentIntro1');

    // edit intro 1
    Route::get('/contentAdmin/edit-contentIntro1-{id}', [Intro1Controller::class, 'edit_content'])->name('edit_contentIntro1');
    Route::post('/contentAdmin/save_addcontentIntro1-{id}', [Intro1Controller::class, 'save_editcontent'])->name('save_editcontentIntro1');

    // delete intro 1
    Route::post('/contentAdmin/delete-contentintro1-{id}', [Intro1Controller::class, 'delete_content'])->name('delete_content_intro1');

    //--------------------- Intro 2 ----------------------
    // list content intro2
    Route::get('/contentAdmin/list-content-intro2', [Intro2Controller::class, 'index'])->name('list_intro2');

    //create / add intro 2
    Route::get('/contentAdmin/add-contentIntro2', [Intro2Controller::class, 'add_content'])->name('add_contentIntro2');
    Route::post('/save_addcontentintro2', [Intro2Controller::class, 'save_addcontent'])->name('save_addcontentIntro2');

    // edit list content
    Route::get('/contentAdmin/edit-contentIntro2-{id}', [Intro2Controller::class, 'edit_content'])->name('edit_contentIntro2');
    Route::post('/contentAdmin/save_addcontentIntro2-{id}', [Intro2Controller::class, 'save_editcontent'])->name('save_editcontentIntro2');

    // delete intro 2
    Route::post('/contentAdmin/delete-contentintro2-{id}', [Intro2Controller::class, 'delete_content'])->name('delete_content_intro2');





    //--------------------- Pembangunan ----------------------
    // list content pembangunan
    Route::get('/contentAdmin/list-content-pembangunan', [PembangunanController::class, 'index'])->name('list_pembangunan');

    //create / add pembangunan 
    Route::get('/contentAdmin/add-contentPembangunan', [PembangunanController::class, 'add_content'])->name('add_contentPembangunan');
    Route::post('/save_addcontentPembangunan', [PembangunanController::class, 'save_addcontent'])->name('save_addcontentPembangunan');

    // edit list pembangunan
    Route::get('/contentAdmin/edit-contentPembangunan-{id}', [PembangunanController::class, 'edit_content'])->name('edit_contentPembangunan');
    Route::post('/contentAdmin/save_addcontentPembangunan-{id}', [PembangunanController::class, 'save_editcontent'])->name('save_editcontentPembangunan');

    //delete pembangunan
    Route::post('/contentAdmin/delete-contentintro2-{id}', [PembangunanController::class, 'deleteContent'])->name('delete_content_pembangunan');




    //--------------------- Sejarah ----------------------
    // list content Sejarah
    Route::get('/contentAdmin/list-content-sejarah', [SejarahController::class, 'index'])->name('sejarah.index');

    //create / add Sejarah 
    Route::get('/contentAdmin/add-content-sejarah', [SejarahController::class, 'add'])->name('sejarah.add');
    Route::post('/contentAdmin/add-content-sejarah/save', [SejarahController::class, 'addSave'])->name('sejarah.add.save');

    // edit list Sejarah
    Route::get('contentAdmin/edit-content-sejarah/{id}', [SejarahController::class, 'edit'])->name('sejarah.edit');
    Route::post('/contentAdmin/edit-content-sejarah-save-{id}', [SejarahController::class, 'editSave'])->name('sejarah.edit.save');

    //delete Sejarah
    Route::post('/contentAdmin/delete-content-sejarah/{id}', [SejarahController::class, 'delete'])->name('sejarah.delete');




    //--------------------- Wisata Hiburan ----------------------
    // list content wisata
    Route::get('/contentAdmin/list-content-wisataHiburan', [WisataHiburanController::class, 'index'])->name('wisata.index');

    //create / add wisata 
    Route::get('/contentAdmin/add-content-wisataHiburan', [WisataHiburanController::class, 'add'])->name('wisata.add');
    Route::post('/contentAdmin/add-content-wisataHiburan/save', [WisataHiburanController::class, 'addSave'])->name('wisata.add.save');

    // edit list wisata
    Route::get('contentAdmin/edit-content-wisataHiburan/{id}', [WisataHiburanController::class, 'edit'])->name('wisata.edit');
    Route::post('/contentAdmin/edit-content-wisataHiburan-save-{id}', [WisataHiburanController::class, 'editSave'])->name('wisata.edit.save');

    //delete wisata
    Route::post('/contentAdmin/delete-content-wisataHiburan/{id}', [WisataHiburanController::class, 'delete'])->name('wisata.delete');





    // //--------------------- Pantai ----------------------
    // // list content Pantai
    Route::get('/contentAdmin/list-content-pantai', [PantaiController::class, 'index'])->name('pantai.index');

    //create / add Pantai 
    Route::get('/contentAdmin/add-content-pantai', [PantaiController::class, 'add'])->name('pantai.add');
    Route::post('/contentAdmin/add-content-pantai/save', [PantaiController::class, 'addSave'])->name('pantai.add.save');

    // edit list Pantai
    Route::get('contentAdmin/edit-content-pantai/{id}', [PantaiController::class, 'edit'])->name('pantai.edit');
    Route::post('/contentAdmin/edit-content-pantai-save-{id}', [PantaiController::class, 'editSave'])->name('pantai.edit.save');

    //delete Pantai
    Route::post('/contentAdmin/delete-content-pantai/{id}', [PantaiController::class, 'delete'])->name('pantai.delete');



    // //--------------------- Child Pantai ----------------------
    Route::get('/contentAdmin/list-content-pantai/child/{id}', [PantaiController::class, 'childIndex'])->name('pantai.child.index');
    Route::post('/contentAdmin/add-content-pantai/child/{id}', [PantaiController::class, 'childAdd'])->name('pantai.child.add');
    Route::post('/contentAdmin/delete-content-pantai/child/{id}/{parent_id}', [PantaiController::class, 'childDelete'])->name('pantai.child.delete');


    //--------------------- Desa ----------------------
    // list content Desa
    Route::get('/contentAdmin/list-content-desa', [DesaController::class, 'index'])->name('desa.index');

    //create / add Desa 
    Route::get('/contentAdmin/add-content-desa', [DesaController::class, 'add'])->name('desa.add');
    Route::post('/contentAdmin/add-content-desa/save', [DesaController::class, 'addSave'])->name('desa.add.save');

    // edit list Desa
    Route::get('contentAdmin/edit-content-desa/{id}', [DesaController::class, 'edit'])->name('desa.edit');
    Route::post('/contentAdmin/edit-content-desa-save-{id}', [DesaController::class, 'editSave'])->name('desa.edit.save');

    //delete Desa
    Route::post('/contentAdmin/delete-content-desa/{id}', [DesaController::class, 'delete'])->name('desa.delete');





    //--------------------- Pura ----------------------
    // list content Pura
    Route::get('/contentAdmin/list-content-pura', [PuraController::class, 'index'])->name('pura.index');

    //create / add Pura 
    Route::get('/contentAdmin/add-content-pura', [PuraController::class, 'add'])->name('pura.add');
    Route::post('/contentAdmin/add-content-pura/save', [PuraController::class, 'addSave'])->name('pura.add.save');

    // edit list Pura
    Route::get('contentAdmin/edit-content-pura/{id}', [PuraController::class, 'edit'])->name('pura.edit');
    Route::post('/contentAdmin/edit-content-pura-save-{id}', [PuraController::class, 'editSave'])->name('pura.edit.save');

    //delete Pura
    Route::post('/contentAdmin/delete-content-pura/{id}', [PuraController::class, 'delete'])->name('pura.delete');




    //--------------------- Food ----------------------
    // list content Food
    Route::get('/contentAdmin/list-content-food', [FoodController::class, 'index'])->name('food.index');

    //create / add Food 
    Route::get('/contentAdmin/add-content-food', [FoodController::class, 'add'])->name('food.add');
    Route::post('/contentAdmin/add-content-food/save', [FoodController::class, 'addSave'])->name('food.add.save');

    // edit list Food
    Route::get('contentAdmin/edit-content-food/{id}', [FoodController::class, 'edit'])->name('food.edit');
    Route::post('/contentAdmin/edit-content-food-save-{id}', [FoodController::class, 'editSave'])->name('food.edit.save');

    //delete Food
    Route::post('/contentAdmin/delete-content-food/{id}', [FoodController::class, 'delete'])->name('food.delete');


    //--------------------- GalleryVideo ----------------------
    // list content GalleryVideo
    Route::get('/contentAdmin/list-content-video', [GalleryVideoController::class, 'index'])->name('video.index');

    //create / add GalleryVideo 
    Route::get('/contentAdmin/add-content-video', [GalleryVideoController::class, 'add'])->name('video.add');
    Route::post('/contentAdmin/add-content-video/save', [GalleryVideoController::class, 'addSave'])->name('video.add.save');

    // edit list GalleryVideo
    Route::get('contentAdmin/edit-content-video/{id}', [GalleryVideoController::class, 'edit'])->name('video.edit');
    Route::post('/contentAdmin/edit-content-video-save-{id}', [GalleryVideoController::class, 'editSave'])->name('video.edit.save');

    //delete GalleryVideo
    Route::post('/contentAdmin/delete-content-video/{id}', [GalleryVideoController::class, 'delete'])->name('video.delete');
});

Auth::routes();


