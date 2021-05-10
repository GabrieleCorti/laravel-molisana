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

Route::get('/', function () {
    $data = config("paste");

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach($data as $key => $pasta){
        $pasta["id"] = $key; 
        if ($pasta["tipo"] == "lunga") {
            $lunga[] = $pasta; 
        } else if ($pasta["tipo"] == "corta") {
            $corta[] = $pasta;
        } else if ($pasta["tipo"] == "cortissima") {
            $cortissima[] = $pasta;
        }
    }    
    return view('home',[
        'lunghe'=> $lunga,
        'corte' => $corta,
        'cortissime' => $cortissima
    ]);
})->name("home");

Route::get("/prodotto/{id}", function ($id){
    $data = config("paste");
    
    return view('prodotto', [
        "pasta" => $data[$id]
    ]);
})->name("prodotto");
