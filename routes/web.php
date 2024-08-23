<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
    return view('forms.register');
});

Route::get('/', [FormController::class, 'list'])->name('forms.list');
Route::get('/forms/list', [FormController::class, 'list'])->name('forms.list');
Route::post('/forms/store', [FormController::class, 'store'])->name('forms.store');
Route::get('/forms/{id}', [FormController::class, 'show'])->name('forms.show');
Route::post('/forms/{id}/approve', [FormController::class, 'approve'])->name('forms.approve');
Route::post('/forms/{id}/reject', [FormController::class, 'reject'])->name('forms.reject');