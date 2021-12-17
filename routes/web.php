<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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
    $post = Post::all();
    return view('welcome', ['posts' => $post]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::resource('posts', PostController::class);



// Route::get('/blog/{post?}' , function ($post = null) {
//     return view('blog', ['post' =>$post]);
// });

// Route::get('/posts', [PostController::class, 'index']);

// Route::get('/posts/{id}', [PostController::class, 'show'])
//         ->name('posts.show');



require __DIR__.'/auth.php';
