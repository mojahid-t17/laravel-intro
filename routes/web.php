<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Feature1Controller;
use Illuminate\Support\Facades\Route;
// use App\http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dev', function () {
    return view('dev');
});
// Route::get('/users', function () {
//     return view('users');
// });
Route::get('/users', function () {
    $name=array('hablu','kabul','abul');
    $countries=array('Bangladesh','INdia','Japan','South korea','australia','Switzerland');
    return view('users',
    ['names'=>$name]+
    ['products'=> 'table', 'products2'=> 'chair']+['countries'=>$countries]);
});
Route::get('/profile', function () {
    $courses=['artificial  inteligence',434,'coa','networking','dc','matchine learning'];
    return view('profile',['name'=>'mojahidul Islam','id'=>2104010202323,'semester'=>'6th','courses'=>$courses]);
});
// Route::get('/home', function () {
//     return view('home');
// });
// Route :: get('/home',[HomeController::class ,'show']);
Route :: get('/home',[HomeController :: class, 'index']);
Route::get('/insert', [HomeController::class, 'insertOperation']);
Route::get('/read', [HomeController::class, 'readOperation']);
Route :: get('/features',[Feature1Controller :: class, 'show']);