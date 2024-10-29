<?php
use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});                                       

//ini adalah rute tanpa MVC
Route::get('/rutebaru', function()
{
    return '<h1 style="color:green;">ini adalah rute baru tanpa MVC';
});

//ini adalah rute dengan view
Route::get('/ruteview', function () {
    return view('ruteview');
});

//ini adalah rute dengan view, controller & model
Route::get('/rutemodel', [RuteController::class, 'menampilkandatamodel']);

//ini adalah biodata aku
Route::get('/rutebiodata', [BiodataController::class, 'menampilkanbiodata']);

