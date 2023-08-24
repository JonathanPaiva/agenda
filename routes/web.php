<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//Route::resource('/contacts', ContactController::class)->except(['show']);

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
Route::get('/contacts/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/update/{id}', [ContactController::class, 'update'])->name('contacts.update');