<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
})->name('main.index');


Route::post('/form', [\App\Http\Controllers\FormController::class, 'store'])->name('form.store');
Route::get('/success/{lead}', [\App\Http\Controllers\FormController::class, 'show'])->name('form.show');
Route::patch('/form/{id}', [\App\Http\Controllers\FormController::class, 'update'])->name('form.update');

Route::group(['prefix' => 'info', 'middleware' => 'auth'], function () {
    Route::get('/', [\App\Http\Controllers\InfoController::class, 'index'])->name('info.index');
    Route::get('/{lead}', [\App\Http\Controllers\InfoController::class, 'edit'])->name('info.edit');
    Route::patch('/{lead}', [\App\Http\Controllers\InfoController::class, 'update'])->name('info.update');
    Route::delete('/{lead}', [\App\Http\Controllers\InfoController::class, 'delete'])->name('info.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
