<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;


Route::get('/absensi', [AbsensiController::class, 'index']);
Route::post('/absensi', [AbsensiController::class, 'store']);
// routes/web.php

Route::get('/profil/edit', 'ProfilController@edit')->name('profil.edit');
// routes/web.php

Route::put('/profil', 'ProfilController@update')->name('profil.update');
// routes/web.php

Route::get('/profil', 'ProfilController@show')->name('profil.show');
Route::get('/absensi', [AbsensiController::class, 'index']);
