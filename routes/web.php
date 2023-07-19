<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController as mainController;

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

Route::get('/', [mainController :: class, 'index']) -> name('home');


Route::get('/create', [mainController :: class, 'create']) -> name('create');
Route::post('/store', [mainController :: class, 'store']) -> name('store');

Route::get('/show/{id}', [mainController :: class, 'show']) -> name('show');

Route::get('/edit/{id}', [mainController :: class, 'edit']) -> name('edit');
Route::put('/update/{id}', [mainController :: class, 'update']) -> name('update');

// Route :: delete('/delete/{id}', [mainController :: class, 'delete']) -> name('delete');
Route :: delete('/delete/{id}', [mainController :: class, 'delete']) -> name('delete');
