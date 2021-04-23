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
//     $user = ['id' => 3,'name' => 'Saad El Daali','email' => 'saad.daali13@gmail.com','phone' => '+1-404-555-1212','job_title' => 'فران'];
//     Mail::to($user['email'])->send(new App\Mail\ticket($user));
//
//     // \Mail::send([],[],function($mail){
//     //     $mail->from('abdallahhanfy@outlook.com');
//     //     $mail->to('amr.morry@gmail.com');
//     //     $mail->subject('test mail');
//     //     $mail->setBody('<p> test mail content</p>', 'text/html');
//     // });
//     // return view('welcome');
//     dd('[DONE]');
// });


Route::get('send/{count?}', 'App\Http\Controllers\sender@index');
