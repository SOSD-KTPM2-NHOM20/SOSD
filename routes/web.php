<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('Trang-chu',function(){
	return view('client.index');
})->name('index');
//admin_trangchu
Route::get('admin',function(){
	return view('admin.trangchu.trangchu');
})->name('index');
//loaibien
Route::get('danh_sach_loai_bien_bao',function(){
	return view('admin.loai_bien.dsachbien');
})->name('danhsachloaihbienbao');
Route::get('them_loai_bien_bao',function(){
	return view('admin.loai_bien.themloaibienbao');
})->name('themloaibienbao');
Route::get('sua_loai_bien_bao',function(){
	return view('admin.bien_bao.sualoaibienbao');
})->name('sualoaibienbao');

//bienbao
Route::get('danh_sach_bien_bao',function(){
	return view('admin.bien_bao.dsachbienbao');
})->name('danhsachbienbao');
Route::get('them_bien_bao',function(){
	return view('admin.bien_bao.thembienbao');
})->name('thembienbao');
Route::get('sua_bien_bao',function(){
	return view('admin.bien_bao.suauser');
})->name('suabienbao');
//user
Route::get('danh_sach_user',function(){
	return view('admin.user.dsachuser');
})->name('danhsachuser');
Route::get('them_user',function(){
	return view('admin.user.themuser');
})->name('themuser');
Route::get('sua_user',function(){
	return view('admin.user.suauser');
})->name('suauser');
