<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FilesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/books', BooksController::class)->middleware(['auth']);

//laišku siuntimas
//Route::get('/mail',MailController::class);
Route::get('mail', [MailController::class, 'plain_email'])->middleware(['Admin']);
Route::get('mail_html', [MailController::class, 'html_email'])->middleware(['Admin']);

Route::get('file', [FilesController::class, 'create']); 
Route::post('file', [FilesController::class, 'store']);

require __DIR__.'/auth.php';
