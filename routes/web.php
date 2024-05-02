<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagsController;
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

Route::get('/tag_success', function () {
    return view('tag_success');
});

// Tag Info
Route::get('/tags/{hash}/info', [TagsController::class, 'info'])->name("tags.info");
Route::get('/tags/send_message/{telephone}', [TagsController::class, 'info'])->name("tags.send_message");
Route::put('/tags/edit_info/{tag}', [TagsController::class, 'update_info'])->name("tags.update_info");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Tags
    Route::get('/tags', [TagsController::class, 'index'])->name('tags.index');
    Route::get('/tags/create', function (){return view ('tags.create');})->name('tags.create');
    Route::post('/tags/store', [TagsController::class, 'store'])->name('tags.store');
    Route::put('/tags/update/{tag}', [TagsController::class, 'update'])->name("tags.update");
    Route::get('/tags/{tag}/edit', [TagsController::class, 'edit'])->name("tags.edit");
    Route::put('/tags/delete/{tag}', [TagsController::class, 'destroy'])->name("tags.destroy");
    Route::get('/tags/{tag}/delete', [TagsController::class, 'delete'])->name("tags.delete");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
