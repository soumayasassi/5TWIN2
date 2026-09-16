<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvisorController ;


Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/advisor', [AdvisorController::class, 'show'])->name('advisor')
->middleware('check-age');

Route::get('/acces-refuse', function () {
   echo 'Acces Denied' ;
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome',
    [\App\Http\Controllers\WelcomeController::class, 'index']);


Route::middleware('web')->group(function () {
    //
    //
    //

});
Route::get('/about/{p}',[\App\Http\Controllers\WelcomeController::class, 'about']);


Route::get('/home/{name}', function ($name) {
    echo "Hello" . $name;
})->name('home')
->where('name', '[A-Za-z]+');

/*$tab= ["name"=> "Med", "age"=>15, "adresse"=>"Ariana"];
$tab =['a',"merci", 12] ;*/
