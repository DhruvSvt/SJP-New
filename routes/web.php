<?php

use App\Http\Controllers\EnquiriesController;
use App\Http\Controllers\VisitorsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [VisitorsController::class, 'index'])->name('home');
Route::get('/category/{slug}', [VisitorsController::class, 'category'])->name('category');
Route::get('/product/{slug}', [VisitorsController::class, 'product'])->name('product');
Route::get('/company-profile', [VisitorsController::class, 'profile'])->name('company-profile');

Route::view('/our-product', 'visitors.our-product')->name('our-product');

Route::view('/single-piece', 'visitors.single')->name('single-piece');
Route::view('/contact-us', 'visitors.contact-us')->name('contact-us');
Route::get('home', [EnquiriesController::class, 'home']);
Route::post('form-action', [EnquiriesController::class, 'store'])->name('formaction');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/storage-link', function () {
    $targetFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';
    symlink($targetFolder, $linkFolder);
    echo 'Symlink process successfully completed';
});
