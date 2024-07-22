<?php
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController as MainIndexController;
use App\Http\Controllers\Admin\Main\IndexController as AdminIndexController;

use App\Http\Controllers\Admin\Category\IndexController as CategoryIndexController;
use App\Http\Controllers\Admin\Category\CreateController as CategoryCreateController;
use App\Http\Controllers\Admin\Category\StoreController as CategoryStoreController;
use App\Http\Controllers\Admin\Category\ShowController as CategoryShowController;
use App\Http\Controllers\Admin\Category\EditController as CategoryEditController;
use App\Http\Controllers\Admin\Category\UpdateController as CategoryUpdateController;
use App\Http\Controllers\Admin\Category\DeleteController as CategoryDeleteController;

use App\Http\Controllers\Admin\Tag\IndexController as TagIndexController;
use App\Http\Controllers\Admin\Tag\CreateController as TagCreateController;
use App\Http\Controllers\Admin\Tag\StoreController as TagStoreController;
use App\Http\Controllers\Admin\Tag\ShowController as TagShowController;
use App\Http\Controllers\Admin\Tag\EditController as TagEditController;
use App\Http\Controllers\Admin\Tag\UpdateController as TagUpdateController;
use App\Http\Controllers\Admin\Tag\DeleteController as TagDeleteController;

use App\Http\Controllers\Admin\Post\IndexController as PostIndexController;
use App\Http\Controllers\Admin\Post\CreateController as PostCreateController;
use App\Http\Controllers\Admin\Post\StoreController as PostStoreController;
use App\Http\Controllers\Admin\Post\ShowController as PostShowController;
use App\Http\Controllers\Admin\Post\EditController as PostEditController;
use App\Http\Controllers\Admin\Post\UpdateController as PostUpdateController;
use App\Http\Controllers\Admin\Post\DeleteController as PostDeleteController;
=======

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
>>>>>>> 1fb30eb95d90b927a3f7eff853e94aa401e0de25

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

<<<<<<< HEAD
// Ana sayfa rotası
Route::get('/', [MainIndexController::class, '__invoke'])->name('home');

// Admin rotaları
Route::prefix('admin')->group(function () {
Route::get('/', [AdminIndexController::class, '__invoke'])->name('admin.home');

// Category rotaları
Route::prefix('category')->group(function () {
Route::get('/', [CategoryIndexController::class, '__invoke'])->name('category.home');
Route::get('/create', [CategoryCreateController::class, '__invoke'])->name('category.create');
Route::post('/store', [CategoryStoreController::class, '__invoke'])->name('category.store');
Route::get('/show/{category}', [CategoryShowController::class, '__invoke'])->name('category.show');
Route::get('/{category}/edit', [CategoryEditController::class, '__invoke'])->name('category.edit');
Route::patch('/{category}', [CategoryUpdateController::class, '__invoke'])->name('category.update');
Route::delete('/{category}', [CategoryDeleteController::class, '__invoke'])->name('category.delete');
});

// Tag rotaları
Route::prefix('tag')->group(function () {
Route::get('/', [TagIndexController::class, '__invoke'])->name('tag.home');
Route::get('/create', [TagCreateController::class, '__invoke'])->name('tag.create');
Route::post('/store', [TagStoreController::class, '__invoke'])->name('tag.store');
Route::get('/show/{tag}', [TagShowController::class, '__invoke'])->name('tag.show');
Route::get('/{tag}/edit', [TagEditController::class, '__invoke'])->name('tag.edit');
Route::patch('/{tag}', [TagUpdateController::class, '__invoke'])->name('tag.update');
Route::delete('/{tag}', [TagDeleteController::class, '__invoke'])->name('tag.delete');

});
// Post rotaları
    Route::prefix('post')->group(function () {
        Route::get('/', [PostIndexController::class, '__invoke'])->name('post.home');
        Route::get('/create', [PostCreateController::class, '__invoke'])->name('post.create');
        Route::post('/store', [PostStoreController::class, '__invoke'])->name('post.store');
        Route::get('/show/{post}', [PostShowController::class, '__invoke'])->name('post.show');
        Route::get('/{post}/edit', [PostEditController::class, '__invoke'])->name('post.edit');
        Route::patch('/{post}', [PostUpdateController::class, '__invoke'])->name('post.update');
        Route::delete('/{post}', [PostDeleteController::class, '__invoke'])->name('post.delete');
    });



});

Auth::routes();
=======
Route::get('/',  [HomePageController::class,'index'])->name('index');
>>>>>>> 1fb30eb95d90b927a3f7eff853e94aa401e0de25
