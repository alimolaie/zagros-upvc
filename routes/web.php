<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MadahController;
use App\Http\Controllers\MonaSebatController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\NotificationSweetAlert;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WhyChooseUsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\GlassController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\WebController;
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
Route::get('/',[WebController::class,'index']);
Route::get('/services',[WebController::class,'service']);
Route::get('/contact-us',[WebController::class,'contactUs']);
Route::post('/post-project',[WebController::class,'storeProject']);
Route::post('/post-contact',[WebController::class,'storeContactUs']);
Route::group(['middleware' => ['Admin']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
    Route::resource('ya-zahra/mahdah', MadahController::class);

    Route::resource('ya-zahra/roles', RoleController::class);
    Route::resource('ya-zahra/users', UserController::class);
    Route::post('ya-zahra/mahdah/{id}', [MadahController::class,'updateMadah']);
    Route::resource('ya-zahra/monasebat',MonaSebatController::class);

    Route::post('ya-zahra/monasabat/{id}', [MonaSebatController::class,'update'])->name('update.monasebat');
    Route::resource('ya-zahra/album',AlbumController::class);
    Route::get('admin/header/edit/',[HeaderController::class,'edit']);
    Route::post('admin/header/update', [HeaderController::class,'update']);
    Route::get('admin/about-us/edit/',[AboutUsController::class,'edit']);
    Route::post('admin/about-us/update', [AboutUsController::class,'update']);
    Route::get('admin/services/index/',[ServiceController::class,'index'])->name('service.index');
    Route::get('admin/services/create/',[ServiceController::class,'create']);
    Route::post('admin/services/store', [ServiceController::class,'store'])->name('service.store');
    Route::get('admin/services/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
    Route::post('admin/services/update/{id}', [ServiceController::class,'update'])->name('service.update');
    Route::post('admin/services/delete/{id}', [ServiceController::class,'destroy'])->name('service.delete');
    Route::get('admin/why-choose-us/edit/',[WhyChooseUsController::class,'edit']);
    Route::post('admin/why-choose-us/update', [WhyChooseUsController::class,'update']);
    Route::resource('admin/brands',BrandController::class);
    Route::post('admin/brands/delete/{id}', [BrandController::class,'destroy'])->name('brand.delete');
    Route::resource('admin/glass',GlassController::class);
    Route::resource('admin/profile',ProfileController::class);
    Route::post('admin/glass/delete/{id}', [GlassController::class,'destroy'])->name('glass.delete');
    Route::post('admin/profile/delete/{id}', [ProfileController::class,'destroy'])->name('profile.delete');
    Route::get('admin/setting/edit/',[SettingController::class,'edit']);
    Route::post('admin/setting/update',[SettingController::class,'update']);
    Route::get('admin/projects/index', [ProjectsController::class,'index']);
    Route::get('admin/contact-us/index', function (){
        $contact=DB::table('contact_us')->paginate(5);
        return view('admin.contact_us.contact_us',compact('contact'));
    });
    Route::post('admin/projects/delete/{id}', [ProjectsController::class,'destroy'])->name('project.delete');
    Route::post('admin/contact/delete/{id}', function ($id){
        DB::table('contact_us')->where('id', $id)->delete();
        return back();
    })->name('contact.delete');

});
