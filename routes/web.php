<?php

use App\Models\Post as posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TutorialController;
use Cviebrock\EloquentSluggable\Tests\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;




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
    $posts = posts::all();
    return view('welcome',['title'=>'Garut Coding'],compact('posts'));
});

Route::get('/dashboard', function () {
    return view('dashboard',['title'=>'Dashboard']);
})->middleware(['auth', 'verified','role:admin'])->name('dashboard');

Route::resource('category',CategoryController::class)->middleware(['auth', 'verified','role:admin']);
Route::resource('post',PostController::class)->middleware(['auth', 'verified','role:admin']);
Route::get('check_slug', function () {
    $slug = SlugService::createSlug(App\Models\Post::class, 'slug', request('title'));
    return response()->json(['slug' => $slug]);
});

Route::resource('home',HomeController::class);
Route::resource('tutorial',TutorialController::class);
Route::get('showArtikel/{id}',[TutorialController::class,'showArtikel'])->name('showArtikel');

// Route::get('/post/create/checkSlug',[PostController::class,'checkSlug'])->middleware('auth','role:admin');


// Route::middleware(['auth', 'role:operator'])->group(function () {
//     Route::get('/operator', [OperatorController::class, 'index'])->name('operator');
//     //semua route dalam grup ini hanya bisa diakses oleh operator
// });



//Route::get('/kepala-sekolah', [KepalaSekolahController::class, 'index'])->middleware(['auth', 'role:kepsek']);



require __DIR__.'/auth.php';
