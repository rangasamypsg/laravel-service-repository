<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

    // $posts = Post::oldest()
    // ->select(['created_at'])
    // ->get()
    // ->groupby(function($createDate){
    //     return $createDate->created_at->format('d-m-Y');
    // })
    // ->map(function($createDate){
    //     return $createDate->count();
    // });

    //dd($posts);



    return view('welcome');
});



Route::resource('posts', PostController::class);
