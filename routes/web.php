<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Intro1Controller;
use App\Http\Controllers\Intro2Controller;
use App\Http\Controllers\PembangunanController;


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
Route::get('/list-blog', [UserController::class, 'view_listBlog'])->name('list-blog');

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

    // edit list content
    Route::get('/contentAdmin/edit-contentIntro1-{id}', [Intro1Controller::class, 'edit_content'])->name('edit_contentIntro1');
    Route::post('/contentAdmin/save_addcontentIntro1-{id}', [Intro1Controller::class, 'save_editcontent'])->name('save_editcontentIntro1');

    //--------------------- Intro 2 ----------------------
    // list content intro2
    Route::get('/contentAdmin/list-content-intro2', [Intro2Controller::class, 'index'])->name('list_intro2');

    //create / add intro 2
    Route::get('/contentAdmin/add-contentIntro2', [Intro2Controller::class, 'add_content'])->name('add_contentIntro2');
    Route::post('/save_addcontentintro2', [Intro2Controller::class, 'save_addcontent'])->name('save_addcontentIntro2');

    // edit list content
    Route::get('/contentAdmin/edit-contentIntro2-{id}', [Intro2Controller::class, 'edit_content'])->name('edit_contentIntro2');
    Route::post('/contentAdmin/save_addcontentIntro2-{id}', [Intro2Controller::class, 'save_editcontent'])->name('save_editcontentIntro2');


    //--------------------- Pembangunan ----------------------
    // list content pembangunan
    Route::get('/contentAdmin/list-content-pembangunan', [PembangunanController::class, 'index'])->name('list_pembangunan');

    //create / add intro 1
    Route::get('/contentAdmin/add-contentPembangunan', [PembangunanController::class, 'add_content'])->name('add_contentPembangunan');
    Route::post('/save_addcontentPembangunan', [PembangunanController::class, 'save_addcontent'])->name('save_addcontentPembangunan');

    // edit list content
    Route::get('/contentAdmin/edit-contentPembangunan-{id}', [PembangunanController::class, 'edit_content'])->name('edit_contentPembangunan');
    Route::post('/contentAdmin/save_addcontentPembangunan-{id}', [PembangunanController::class, 'save_editcontent'])->name('save_editcontentPembangunan');
});

Auth::routes();


