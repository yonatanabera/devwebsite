<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogCategoriesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\OurCharactersController;
use App\Http\Controllers\OurClientsController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SendUsMessageController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'about', 'as'=>'about.'], function(){
    Route::get('/all', [AboutUsController::class, 'showAll'])->name('all');
    Route::post('/create', [AboutUsController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [AboutUsController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [AboutUsController::class, 'update'])->name('update');

});

Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
    Route::get('/all', [BlogCategoriesController::class, 'showAll'])->name('all');
    Route::post('/create', [BlogCategoriesController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [BlogCategoriesController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [BlogCategoriesController::class, 'update'])->name('update');

});

Route::group(['prefix' => 'blog', 'as' => 'blog.'], function(){
    Route::get('/all', [BlogController::class, 'showAll'])->name('all');
    Route::post('/create', [BlogController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [BlogController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [BlogController::class, 'update'])->name('update');
    Route::get('/detail/{id}', [BlogController::class, 'showOne'])->name('detail');

});

Route::group(['prefix' => 'contact', 'as' => 'contact.'], function(){
    Route::get('/all', [ContactUsController::class, 'showAll'])->name('all');
    Route::post('/create', [ContactUsController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [ContactUsController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [ContactUsController::class, 'update'])->name('update');

});

Route::group(['prefix' => 'characters', 'as' => 'characters.'], function(){
    Route::get('/all', [OurCharactersController::class, 'showAll'])->name('all');
    Route::post('/create', [OurCharactersController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [OurCharactersController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [OurCharactersController::class, 'update'])->name('update');

});

Route::group(['prefix' => 'clients', 'as' => 'clients.'], function(){
    Route::get('/all', [OurClientsController::class, 'showAll'])->name('all');
    Route::post('/create', [OurClientsController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [OurClientsController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [OurClientsController::class, 'update'])->name('update');

});

Route::group(['prefix' => 'team', 'as' => 'team.'], function(){
    Route::get('/all', [OurTeamController::class, 'showAll'])->name('all');
    Route::post('/create', [OurTeamController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [OurTeamController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [OurTeamController::class, 'update'])->name('update');

});

Route::group(['prefix' => 'portfolio', 'as' => 'portfolio.'], function(){
    Route::get('/all', [PortfolioController::class, 'showAll'])->name('all');
    Route::post('/create', [PortfolioController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [PortfolioController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [PortfolioController::class, 'update'])->name('update');

});

Route::group(['prefix' => 'message', 'as' => 'message.'], function(){
    Route::get('/all', [SendUsMessageController::class, 'showAll'])->name('all');
    Route::post('/create', [SendUsMessageController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [SendUsMessageController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [SendUsMessageController::class, 'update'])->name('update');

});

Route::group(['prefix' => 'testimony', 'as' => 'testimony.'], function(){
    Route::get('/all', [TestimonialController::class, 'showAll'])->name('all');
    Route::post('/create', [TestimonialController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [TestimonialController::class, 'delete'])->name('delete');
    Route::put('/update/{id}', [TestimonialController::class, 'update'])->name('update');

});
