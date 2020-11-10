<?php

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



Route::get('/', 'PagesController@home')->middleware('auth');
Route::get('/about', 'PagesController@about')->middleware('auth');

Route::get('/blanks', 'MahasiswaController@percobaan');
Route::get('/mahasiswa', 'MahasiswaController@index')->middleware('auth');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->middleware('auth');
Route::get('/mahasiswa/{mahasiswa}', 'MahasiswaController@show')->middleware('auth');
Route::post('/mahasiswa', 'MahasiswaController@store')->middleware('auth');
Route::delete('/mahasiswa/{mahasiswa}', 'MahasiswaController@destroy')->middleware('auth');
Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit')->middleware('auth');
Route::put('/mahasiswa/{mahasiswa}', 'MahasiswaController@update')->middleware('auth');

Route::get('/stuff', 'StuffController@index')->middleware('auth');
Route::get('/stuff/create', 'StuffController@create')->middleware('auth');
Route::get('/stuff/{stuff}', 'StuffController@show')->middleware('auth');
Route::post('/stuff', 'StuffController@store')->middleware('auth');
Route::delete('/stuff/{stuff}', 'StuffController@destroy')->middleware('auth');
Route::get('/stuff/{stuff}/edit', 'StuffController@edit')->middleware('auth');
Route::put('/stuff/{stuff}', 'StuffController@update')->middleware('auth');

Route::get('/category', 'CategoryController@index')->middleware('auth');
Route::get('/category/create', 'CategoryController@create')->middleware('auth');
Route::get('/category/{category}', 'CategoryController@show')->middleware('auth');
Route::post('/category', 'CategoryController@store')->middleware('auth');
Route::delete('/category/{category}', 'CategoryController@destroy')->middleware('auth');
Route::get('/category/{category}/edit', 'CategoryController@edit')->middleware('auth');
Route::put('/category/{category}', 'CategoryController@update')->middleware('auth');

Route::get('/transaction', 'TransactionController@index')->middleware('auth');
Route::get('/transaction/create', 'TransactionController@create')->middleware('auth');
Route::get('/transaction/{transaction}', 'TransactionController@show')->middleware('auth');
Route::post('/transaction', 'TransactionController@store')->middleware('auth');
Route::delete('/transaction/{transaction}', 'TransactionController@destroy')->middleware('auth');
Route::get('/transaction/{transaction}/edit', 'TransactionController@edit')->middleware('auth');
Route::put('/transaction/{transaction}', 'TransactionController@update')->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::view('blank', 'blank');







Route::get('collection', 'MahasiswaController@Collection');


// Route::get('sampledosen', function(){
//     DB::table('dosen')->insert([
//         [
//             'nama_ds'       => 'Dr. Ferrian Redhia Pratama',
//             'nip_ds'        => '112231',
//             'email_ds'      => 'ferrianrp@gmail.com',
//             'alamat_ds'     => 'Depok',
//             'created_at'    => '2020-03-12 19:10:14',
//             'updated_at'    => '2020-03-12 19:10:14'
//         ]
//     ]);
// });


// Route::get('tambahmahasiswa', function(){
//     DB::table('mahasiswa')->insert([
//         [
//             'nim'          => '321144201',
//             'nama'         => 'Raditya',
//             'alamat'       => 'Bekasi',
//             'jk'           => 'Perempuan',
//             'jurusan'      => 'Teknik Mesin',
//             'prodi'        => 'Teknik Konversi Energi (D3)',
//             'kelas'        => 'TKS001',
//             'angkatan'     => '2017'
//         ]
//     ]);
// });

      

// Route::get('/student', 'StudentController@index');
// Route::get('/student/create', 'StudentController@create');
// Route::get('/student/{student}', 'StudentController@show');
// Route::post('/student', 'StudentController@store');
// Route::delete('/student/{student}', 'StudentController@destroy');
// Route::get('/student/{student}/edit', 'StudentController@edit');
// Route::put('/student/{student}', 'StudentController@update');
