<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fakultas', function(){
    return view('fakultas');

});
Route::get('/prodi',function(){
    return view('prodi');
});

Route::get('/mhs',function(){
    $data =[
        ["npm" => 2226250080,"nama"=> "Fawwaz"],
        ["npm" => 2226250088,"nama"=> "Ahmad"]
    ];
    return view('mahasiswa.index')->with('mahasiswa',$data);
});
