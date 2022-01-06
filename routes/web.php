<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
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
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserResourceController;
use App\Http\Controllers\WisataHiburanController;
use App\Models\Review;

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
Route::get('/list-blog/pembangunan', [UserController::class, 'pembangunan'])->name('pembangunan.view');

// DETAIL CONTENT
Route::get('/detail-blog/sejarah/{slug}', [UserController::class, 'sejarahDetail'])->name('sejarah.detail');
Route::get('/detail-blog/wisata/{slug}', [UserController::class, 'wisataDetail'])->name('wisata.detail');
Route::get('/detail-blog/desa/{slug}', [UserController::class, 'desaDetail'])->name('desa.detail');
Route::get('/detail-blog/pura/{slug}', [UserController::class, 'puraDetail'])->name('pura.detail');
Route::get('/detail-blog/makanan/{slug}', [UserController::class, 'makananDetail'])->name('makanan.detail');
Route::get('/detail-blog/pantai/{slug}', [UserController::class, 'pantaiDetail'])->name('pantai.detail');
Route::get('/detail-blog/pembangunan/{slug}', [UserController::class, 'pembangunanDetail'])->name('pembangunan.detail');


Route::group(['middleware' => 'auth'], function () {
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

    //--------------------- Banner ----------------------
    // list content intro1
    Route::get('/contentAdmin/list-component-banner', [BannerController::class, 'index'])->name('list_banner');

    //create / add intro 1
    Route::get('/contentAdmin/add-component-banner', [BannerController::class, 'add_content'])->name('add_banner');
    Route::post('/save_componentBanner', [BannerController::class, 'save_addcontent'])->name('save_addBanner');

    // edit intro 1
    Route::get('/contentAdmin/edit-componentBanner-{id}', [BannerController::class, 'edit_content'])->name('edit_banner');
    Route::post('/contentAdmin/save_componentBanner-{id}', [BannerController::class, 'save_editcontent'])->name('save_editBanner');

    // delete intro 1
    Route::post('/contentAdmin/delete-componentBanner-{id}', [BannerController::class, 'delete_content'])->name('delete_banner');

    //--------------------- Intro 1 ----------------------
    // list content intro1
    Route::get('/contentAdmin/list-content-intro1', [Intro1Controller::class, 'index'])->middleware('component:intro1')->name('list_intro1');

    //create / add intro 1
    Route::middleware('component:intro1,add')->group(function () {
        Route::get('/contentAdmin/add-contentIntro1', [Intro1Controller::class, 'add_content'])->name('add_contentIntro1');
        Route::post('/save_addcontentintro1', [Intro1Controller::class, 'save_addcontent'])->name('save_addcontentIntro1');
    });

    // edit intro 1
    Route::middleware('component:intro1,edit')->group(function () {
        Route::get('/contentAdmin/edit-contentIntro1-{id}', [Intro1Controller::class, 'edit_content'])->name('edit_contentIntro1');
        Route::post('/contentAdmin/save_addcontentIntro1-{id}', [Intro1Controller::class, 'save_editcontent'])->name('save_editcontentIntro1');
    });

    // delete intro 1
    Route::post('/contentAdmin/delete-contentintro1-{id}', [Intro1Controller::class, 'delete_content'])->middleware('component:intro1,delete')->name('delete_content_intro1');

    //--------------------- Intro 2 ----------------------
    // list content intro2
    Route::get('/contentAdmin/list-content-intro2', [Intro2Controller::class, 'index'])->name('list_intro2')->middleware('component:intro2');

    //create / add intro 2
    Route::middleware('component:intro2,add')->group(function () {
        Route::get('/contentAdmin/add-contentIntro2', [Intro2Controller::class, 'add_content'])->name('add_contentIntro2');
        Route::post('/save_addcontentintro2', [Intro2Controller::class, 'save_addcontent'])->name('save_addcontentIntro2');
    });

    // edit list content
    Route::middleware('component:intro2,edit')->group(function () {
        Route::get('/contentAdmin/edit-contentIntro2-{id}', [Intro2Controller::class, 'edit_content'])->name('edit_contentIntro2');
        Route::post('/contentAdmin/save_addcontentIntro2-{id}', [Intro2Controller::class, 'save_editcontent'])->name('save_editcontentIntro2');
    });

    // delete intro 2
    Route::post('/contentAdmin/delete-contentIntro2-{id}', [Intro2Controller::class, 'delete_content'])->middleware('component:intro2,delete')->name('delete_content_intro2');





    //--------------------- Pembangunan ----------------------
    // list content pembangunan
    Route::get('/contentAdmin/list-content-pembangunan', [PembangunanController::class, 'index'])->middleware('component:pembangunan')->name('list_pembangunan');

    //create / add pembangunan 
    Route::get('/contentAdmin/add-contentPembangunan', [PembangunanController::class, 'add_content'])->middleware('component:pembangunan,add')->name('add_contentPembangunan');
    Route::post('/save_addcontentPembangunan', [PembangunanController::class, 'save_addcontent'])->middleware('component:pembangunan,add')->name('save_addcontentPembangunan');

    // edit list pembangunan
    Route::get('/contentAdmin/edit-contentPembangunan-{id}', [PembangunanController::class, 'edit_content'])->middleware('component:pembangunan,edit')->name('edit_contentPembangunan');
    Route::post('/contentAdmin/save_addcontentPembangunan-{id}', [PembangunanController::class, 'save_editcontent'])->middleware('component:pembangunan,edit')->name('save_editcontentPembangunan');

    //delete pembangunan
    Route::post('/contentAdmin/delete-contentintro2-{id}', [PembangunanController::class, 'deleteContent'])->middleware('component:pembangunan,delete')->name('delete_content_pembangunan');




    //--------------------- Sejarah ----------------------
    // list content Sejarah
    Route::get('/contentAdmin/list-content-sejarah', [SejarahController::class, 'index'])->middleware('component:sejarah')->name('sejarah.index');

    //create / add Sejarah 
    Route::get('/contentAdmin/add-content-sejarah', [SejarahController::class, 'add'])->middleware('component:sejarah,add')->name('sejarah.add');
    Route::post('/contentAdmin/add-content-sejarah/save', [SejarahController::class, 'addSave'])->middleware('component:sejarah,add')->name('sejarah.add.save');

    // edit list Sejarah
    Route::get('contentAdmin/edit-content-sejarah/{id}', [SejarahController::class, 'edit'])->middleware('component:sejarah,edit')->name('sejarah.edit');
    Route::post('/contentAdmin/edit-content-sejarah-save-{id}', [SejarahController::class, 'editSave'])->middleware('component:sejarah,edit')->name('sejarah.edit.save');

    //delete Sejarah
    Route::post('/contentAdmin/delete-content-sejarah/{id}', [SejarahController::class, 'delete'])->middleware('component:sejarah,delete')->name('sejarah.delete');




    //--------------------- Wisata Hiburan ----------------------
    // list content wisata
    Route::get('/contentAdmin/list-content-wisataHiburan', [WisataHiburanController::class, 'index'])->middleware('component:wisata_hiburan')->name('wisata.index');

    //create / add wisata 
    Route::get('/contentAdmin/add-content-wisataHiburan', [WisataHiburanController::class, 'add'])->middleware('component:wisata_hiburan,add')->name('wisata.add');
    Route::post('/contentAdmin/add-content-wisataHiburan/save', [WisataHiburanController::class, 'addSave'])->middleware('component:wisata_hiburan,add')->name('wisata.add.save');

    // edit list wisata
    Route::get('contentAdmin/edit-content-wisataHiburan/{id}', [WisataHiburanController::class, 'edit'])->middleware('component:wisata_hiburan,edit')->name('wisata.edit');
    Route::post('/contentAdmin/edit-content-wisataHiburan-save-{id}', [WisataHiburanController::class, 'editSave'])->middleware('component:wisata_hiburan,edit')->name('wisata.edit.save');

    //delete wisata
    Route::post('/contentAdmin/delete-content-wisataHiburan/{id}', [WisataHiburanController::class, 'delete'])->middleware('component:wisata_hiburan,delete')->name('wisata.delete');





    // //--------------------- Pantai ----------------------
    // // list content Pantai
    Route::get('/contentAdmin/list-content-pantai', [PantaiController::class, 'index'])->middleware('component:pantai')->name('pantai.index');

    //create / add Pantai 
    Route::get('/contentAdmin/add-content-pantai', [PantaiController::class, 'add'])->middleware('component:pantai,add')->name('pantai.add');
    Route::post('/contentAdmin/add-content-pantai/save', [PantaiController::class, 'addSave'])->middleware('component:pantai,add')->name('pantai.add.save');

    // edit list Pantai
    Route::get('contentAdmin/edit-content-pantai/{id}', [PantaiController::class, 'edit'])->middleware('component:pantai,edit')->name('pantai.edit');
    Route::post('/contentAdmin/edit-content-pantai-save-{id}', [PantaiController::class, 'editSave'])->middleware('component:pantai,edit')->name('pantai.edit.save');

    //delete Pantai
    Route::post('/contentAdmin/delete-content-pantai/{id}', [PantaiController::class, 'delete'])->middleware('component:pantai,delete')->name('pantai.delete');



    // //--------------------- Child Pantai ----------------------
    Route::get('/contentAdmin/list-content-pantai/child/{id}', [PantaiController::class, 'childIndex'])->name('pantai.child.index');
    Route::post('/contentAdmin/add-content-pantai/child/{id}', [PantaiController::class, 'childAdd'])->name('pantai.child.add');
    Route::post('/contentAdmin/delete-content-pantai/child/{id}/{parent_id}', [PantaiController::class, 'childDelete'])->name('pantai.child.delete');


    //--------------------- Desa ----------------------
    // list content Desa
    Route::get('/contentAdmin/list-content-desa', [DesaController::class, 'index'])->middleware('component:desa')->name('desa.index');

    //create / add Desa 
    Route::get('/contentAdmin/add-content-desa', [DesaController::class, 'add'])->middleware('component:desa,add')->name('desa.add');
    Route::post('/contentAdmin/add-content-desa/save', [DesaController::class, 'addSave'])->middleware('component:desa,add')->name('desa.add.save');

    // edit list Desa
    Route::get('contentAdmin/edit-content-desa/{id}', [DesaController::class, 'edit'])->middleware('component:desa,edit')->name('desa.edit');
    Route::post('/contentAdmin/edit-content-desa-save-{id}', [DesaController::class, 'editSave'])->middleware('component:desa,edit')->name('desa.edit.save');

    //delete Desa
    Route::post('/contentAdmin/delete-content-desa/{id}', [DesaController::class, 'delete'])->middleware('component:desa,delete')->name('desa.delete');





    //--------------------- Pura ----------------------
    // list content Pura
    Route::get('/contentAdmin/list-content-pura', [PuraController::class, 'index'])->middleware('component:pura')->name('pura.index');

    //create / add Pura 
    Route::get('/contentAdmin/add-content-pura', [PuraController::class, 'add'])->middleware('component:pura,add')->name('pura.add');
    Route::post('/contentAdmin/add-content-pura/save', [PuraController::class, 'addSave'])->middleware('component:pura,add')->name('pura.add.save');

    // edit list Pura
    Route::get('contentAdmin/edit-content-pura/{id}', [PuraController::class, 'edit'])->middleware('component:pura,edit')->name('ppura.edit');
    Route::post('/contentAdmin/edit-content-pura-save-{id}', [PuraController::class, 'editSave'])->middleware('component:pura,edit')->name('pura.edit.save');

    //delete Pura
    Route::post('/contentAdmin/delete-content-pura/{id}', [PuraController::class, 'delete'])->middleware('component:pura,delete')->name('pura.delete');




    //--------------------- Food ----------------------
    // list content Food
    Route::get('/contentAdmin/list-content-food', [FoodController::class, 'index'])->middleware('component:makanan_khas')->name('food.index');

    //create / add Food 
    Route::get('/contentAdmin/add-content-food', [FoodController::class, 'add'])->middleware('component:makanan_khas,add')->name('food.add');
    Route::post('/contentAdmin/add-content-food/save', [FoodController::class, 'addSave'])->middleware('component:makanan_khas,add')->name('food.add.save');

    // edit list Food
    Route::get('contentAdmin/edit-content-food/{id}', [FoodController::class, 'edit'])->middleware('component:makanan_khas,edit')->name('food.edit');
    Route::post('/contentAdmin/edit-content-food-save-{id}', [FoodController::class, 'editSave'])->middleware('component:makanan_khas,edit')->name('food.edit.save');

    //delete Food
    Route::post('/contentAdmin/delete-content-food/{id}', [FoodController::class, 'delete'])->middleware('component:makanan_khas,delete')->name('food.delete');


    //--------------------- GalleryVideo ----------------------
    // list content GalleryVideo
    Route::get('/contentAdmin/list-content-video', [GalleryVideoController::class, 'index'])->middleware('component:gallery_video')->name('video.index');

    //create / add GalleryVideo 
    Route::get('/contentAdmin/add-content-video', [GalleryVideoController::class, 'add'])->middleware('component:gallery_video,add')->name('video.add');
    Route::post('/contentAdmin/add-content-video/save', [GalleryVideoController::class, 'addSave'])->middleware('component:gallery_video,add')->name('video.add.save');

    // edit list GalleryVideo
    Route::get('contentAdmin/edit-content-video/{id}', [GalleryVideoController::class, 'edit'])->middleware('component:gallery_video,edit')->name('video.edit');
    Route::post('/contentAdmin/edit-content-video-save-{id}', [GalleryVideoController::class, 'editSave'])->middleware('component:gallery_video,edit')->name('video.edit.save');

    //delete GalleryVideo
    Route::post('/contentAdmin/delete-content-video/{id}', [GalleryVideoController::class, 'delete'])->middleware('component:gallery_video,delete')->name('video.delete');


    //--------------------- REVIEW ----------------------
    // list content REVIEW
    Route::get('/contentAdmin/list-content-review', [ReviewController::class, 'index'])->middleware('component:review')->name('review.index');

    //create / add REVIEW 
    Route::get('/contentAdmin/add-content-review', [ReviewController::class, 'add'])->middleware('component:review,add')->name('review.add');
    Route::post('/contentAdmin/add-content-review/save', [ReviewController::class, 'addSave'])->middleware('component:review,add')->name('review.add.save');

    // edit list REVIEW
    Route::get('contentAdmin/edit-content-review/{id}', [ReviewController::class, 'edit'])->middleware('component:review,edit')->name('review.edit');
    Route::post('/contentAdmin/edit-content-review-save-{id}', [ReviewController::class, 'editSave'])->middleware('component:review,edit')->name('review.edit.save');

    //delete REVIEW
    Route::post('/contentAdmin/delete-content-review/{id}', [ReviewController::class, 'delete'])->middleware('component:review,delete')->name('review.delete');

    //--------------------- CRUD User ----------------------
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/contentAdmin/users', [UserResourceController::class, 'index'])->name('user.index');
        Route::get('/contentAdmin/users/create', [UserResourceController::class, 'create'])->name('user.create');
        Route::post('/contentAdmin/users/create', [UserResourceController::class, 'store'])->name('user.store');
        Route::get('/contentAdmin/users/{id}/edit', [UserResourceController::class, 'edit'])->name('user.edit');
        Route::post('/contentAdmin/users/{id}/edit', [UserResourceController::class, 'update'])->name('user.update');
        Route::post('/contentAdmin/users/{id}/destroy', [UserResourceController::class, 'destroy'])->name('user.destroy');
    });
});

Auth::routes();