<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\ProjectController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
});

Route::get('/projects', [ProjectController::class, 'projects'])->name('front.projects');



Route::get('/blog', function () {
    return view('front.blog');
});

Route::get('/contact', function () {
    return view('front.contact');
});

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');



// Front blog pages
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');



/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','is_admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::resource('blogs', BlogController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('contacts', ContactMessageController::class)->only(['index','show','destroy']);
     Route::resource('projects', ProjectController::class);
});

