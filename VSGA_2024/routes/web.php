<?php

use App\Http\Controllers\PageControllerSatu;
use App\Http\Controllers\CRUDController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDPhoto;
use App\Http\Controllers\WelcomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\PengajarController;

Route::get('/daftar-dosen', [PengajarController::class, 'daftarPengajar']);
Route::get('/tabel-pengajar', [PengajarController::class, 'tabelPengajar']);
Route::get('/blog-pengajar', [PengajarController::class, 'blogPengajar']);
Route::get('pasar-buah', [PageControllerSatu::class, 'satu']);

Route::resource('crud',CRUDController::class);
Route::resource('photos',CRUDPhoto::class)->only([
    'index','show'
]);
Route::resource('crud',CRUDPhoto::class)->except([
    'create','store','update','destroy'
]);
Route::get('/greeting',[WelcomeController::class,'greeting']);
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/selamat', function () {
    return view('hello ', ['name'=>'puput']);
});

Route::get('/world', function () {
    return 'hello dunia';
});

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/tampil', function () {
    return view('tampil');
})->name('tampil');

Route::get('/kodebarang/{jenis?}/{merek?}', function ($jk='k01',$mrk='nokia') {
    return "kode barang $jk dan nama barang $mrk ";
});

Route::get('/posts/{post}/{comment}', function ($post, $comment) {
    return 'pos ke'.$post."komentar ke : ". $comment;
});

Route::get('/pesandisini', function(){
   return '<h1> pesan di sini </h1> ';
}); 
Route :: redirect('/contact-us','/pesandisini');

Route::prefix('admin')->group(function(){

Route::get ('/polinema/dosen',function(){
    return "<h1>daftar nama dosen</h1>";
});
Route::get ('/polinema/tendik',function(){
    return "<h1>daftar nama tenaga pendidik</h1>";
});
Route::get ('/polinema/jurusan',function(){
    return "<h1>daftar nama jurusan</h1>";
});
});
Route::fallback (function(){
    return "<h1>maaf, alamat ini tidak ditemukan</h1>";
});
