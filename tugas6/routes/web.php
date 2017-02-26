<?php
use App\mahasiswa;
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

Route::get('/', 'HomeController@index');

Route::get('/mahasiswa', 'mahasiswacontroller@index');
Route::get('/tambah-mahasiswa','mahasiswacontroller@tambahmahasiswa');
Route::post('/tambah-mahasiswa/action','mahasiswacontroller@store');
Route::get('/mahasiswa/edit/{id}','mahasiswacontroller@edit');
Route::patch('/mahasiswa/update/{id}','mahasiswacontroller@update');
Route::get('/mahasiswa/delete/{id}','mahasiswacontroller@destroy');
// Route::get('/login','loginController@index');
// Route::get('/dosen',function(){
// 	return view('dosen');
// });
// Route::get('/tambah_mahasiswa',function(){
// 	$mahasiswa =new mahasiswa;
// 	$mahasiswa -> nim = "14111149";
// 	$mahasiswa -> nama = "Thaufiq Umardi";
// 	$mahasiswa -> jenis_kelamin ="L";
// 	$mahasiswa -> jurusan = "Teknik Informatika";
// 	$mahasiswa -> alamat = "Jalanan";
// 	$mahasiswa -> save();
// });
// Route::get('/update', function(){
// 	$mahasiswa = mahasiswa::find(1);
// 	$mahasiswa -> nama = "thaufiq";
// 	$mahasiswa -> jurusan = "Teknik Industri";
// 	$mahasiswa -> alamat = "Jl. Dr. Abdul Rivai No.100";
// 	$mahasiswa -> save();
// });
// Route::get ('/tampil', function(){
// 	$mahasiswa = mahasiswa::all();
// 	foreach ($mahasiswa as $mhs) {
// 		echo "<b>NIM</b>";
// 		echo $mhs->nama . "<br>";
// 	}
// });
// Route::get('/hapus',function(){
// 	$mahasiswa = mahasiswa::find(1);
// 	$mahasiswa->delete();
// });
Auth::routes();

Route::get('/home', 'HomeController@index');
