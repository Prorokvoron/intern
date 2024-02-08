<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientEmailController;
use App\Http\Controllers\ClientPhoneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TreeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function(){

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
//**********  client-phones  *****************///
    Route::get('/client-phones', [ClientPhoneController::class,'index']); // Получить все записи

    Route::post('/client-phones', [ClientPhoneController::class,'store']); // Сохранить запись в базе данных

    Route::get('/client-phones/{clientPhone}', [ClientPhoneController::class,'show']); // Получить одну запись по id

   Route::patch('/client-phones/{clientPhone}', [ClientPhoneController::class,'update']); // Обновить данные в базе данных

   Route::delete('/client-phones/{clientPhone}', [ClientPhoneController::class,'delete']);

    //**********  client  *****************///

    Route::prefix('/clients')->group(function (){

        Route::get ('/', [ClientController::class, 'index'])->name('clients.index');;

        Route::post('/', [ClientController::class, 'store']);

        Route::get('/{client}', [ClientController::class, 'show'])->name('clients.show');;

        Route::patch('/{client}', [ClientController::class,'update' ])->name('clients.update');

        Route::delete('/{client}',[ClientController::class,'delete'])->name('clients.delete');
    });

    //*************  tree  *******************//
    Route::prefix('/trees')->group(function (){

        Route::get('/',[TreeController::class, 'index']);

        Route::post('/',[TreeController::class, 'store']);

        Route::get('/{tree}', [TreeController::class, 'show']);

        Route::patch('/{tree}',[TreeController::class, 'update']);

        Route::delete('/{tree}',[TreeController::class, 'delete']);
    });

    //*************  post  *******************//

    Route::prefix('/posts')->group(function (){

        //Route::get('/',[PostController::class, 'index'])->name('posts.index');

//        Route::post('/',[TreeController::class, 'store']);
        Route::get('/',[PostController::class,'index'])->name('post.index');
//
        Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
//
        Route::put('/{post}',[PostController::class, 'update'])->name('posts.update');
//
        Route::delete('/{post}',[PostController::class, 'delete'])->name('posts.delete');
    });
    Route::prefix('/client-emails')->group(function (){

        Route::get ('/', [ClientEmailController::class, 'index']);//->name('client-emails.index');

        Route::get('/{clientEmail}', [ClientEmailController::class, 'show']);//->name('client-emails.show');

        Route::patch('/{clientEmail}', [ClientEmailController::class,'update']);//->name('client-emails.update');

        Route::delete('/{clientEmail}',[ClientEmailController::class,'delete']);//->name('client-emails.delete');
    });
    Route::prefix('/tasks')->group(function (){

        Route::get ('/', [TaskController::class, 'index'])->name('tasks.index');

        Route::get('/{task}', [TaskController::class, 'show'])->name('tasks.show');

        Route::post('/',[TaskController::class,'store'])->name('tasks.store');

        Route::patch('/{task}', [TaskController::class,'update'])->name('tasks.update');

        Route::delete('/{task}',[TaskController::class,'delete'])->name('tasks.delete');
    });

});


