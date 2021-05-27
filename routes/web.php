<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\XmlParserController;
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

Route::get('/', function () {
//    return 'welcome';
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback',[FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/form', [FormController::class, 'create'])->name('form.create');
Route::post('/form', [FormController::class, 'store'])->name('form.store');


Route::prefix('/news')->group(function (){
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/create', [NewsController::class, 'create'])->middleware('role:admin')->name('news.create');
    Route::post('/create', [NewsController::class, 'store'])->middleware('role:admin')->name('news.store');

    Route::post('/update/{news}', [NewsController::class, 'update'])->middleware('role:admin')->name('news.update');
    Route::get('/edit/{news}', [NewsController::class, 'edit'])->middleware('role:admin')->name('news.edit');
    Route::delete('/delete/{news}', [NewsController::class, 'delete'])->middleware('role:admin')->name('news.delete');

    Route::get('/{news}', [NewsController::class, 'show'])->name('news.show');
});

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/user', [UserController::class, 'index'])->middleware('role:admin')->name('user.index');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->middleware('role:admin')->name('user.edit');
Route::post('/user/update/{user}', [UserController::class, 'update'])->middleware('role:admin')->name('user.update');
Route::delete('/user/delete/{user}', [UserController::class, 'delete'])->middleware('role:admin')->name('user.delete');

Route::get('/parser', [XmlParserController::class, 'index']);

require __DIR__.'/auth.php';
