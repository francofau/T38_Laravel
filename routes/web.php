<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'Lunes'], function(){
    Route::get('/test/lunes', function(){
         return 'get: Ruta "lunes" con middleware';
    });
    Route::post('/test/lunes', function(){
         return 'post: Ruta "lunes" con middleware';
    });
    Route::put('/test/lunes', function(){
         return 'put: Ruta "lunes" con middleware';
    });
    Route::delete('/test/lunes', function(){
         return 'delete: Ruta "lunes" con middleware';
    });
});

Route::get('/Error404', function (){
     /* return response("", 404)
          ->header('location','error404');
      */
     /* return view('error404'); */
     return response()->view('error404', [], 404);
    
});