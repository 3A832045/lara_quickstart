<?php

use App\Task;
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

Route::get('/', function () {
    return view('tasks');
});
Route::post('/task',function (Request $request){
   $validator=Validator::make($request->all(),[
       'name'=>'request|max:255',
   ]);

   if($validator->fail()){
     return redirect('/')
         ->withInput()
         ->withErrors($validator);
   };
});
Route::delete('/task/{task}',function (Task $task){
    //
});
