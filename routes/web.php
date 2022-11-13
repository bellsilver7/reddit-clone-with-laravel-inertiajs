<?php

use App\Http\Controllers\Backend\CommunityController;
use App\Http\Controllers\Backend\CommunityPostController;
use App\Http\Controllers\Backend\PostVoteController;
use App\Http\Controllers\Frontend\CommunityController as FrontendCommunityController;
use App\Http\Controllers\Frontend\PostCommentController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\WelcomeController;
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

Route::get('/', WelcomeController::class);

Route::get('/r/{slug}', [FrontendCommunityController::class, 'show'])->name('frontend.communities.show');
Route::get('/r/{community_slug}/posts/{post:slug}', [PostController::class, 'show'])->name('frontend.communities.posts.show');
Route::post('/r/{community_slug}/posts/{post:slug}/comments', [PostCommentController::class, 'store'])->name('frontend.posts.comments');


Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resource('/communities', CommunityController::class);
    Route::resource('/communities.posts', CommunityPostController::class);
    Route::post('/post/{post:slug}/upVote', [PostVoteController::class, 'upVote'])->name('post.upVote');
    Route::post('/post/{post:slug}/downVote', [PostVoteController::class, 'downVote'])->name('post.downVote');
});

require __DIR__ . '/auth.php';
