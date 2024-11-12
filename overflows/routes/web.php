<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {

    $nome = "Isac";

    return view('welcome', ['nome' => $nome]);
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/cadastrar', function (){
    return view('cadastro');
});

//Parte das questões:
Route::get('/testapi', function () {
    return view('problema');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/editor', function () {
    return view('editor');
});
Route::get('/classificacao', function () {
    return view('classificacao');
});
Route::get('/questoes', function () {
    return view('questoes');
});
Route::get('/biblioteca', function () {
    return view('bibliotecas');
});


Route::get('/questaoAngryDucks/{testNumber}', [TestController::class, 'view2']);
Route::get('/problema/{testNumber}', [TestController::class, 'olaOverflows']);
Route::get('/questaotelefone/{testNumber}', [TestController::class, 'telefone']);
Route::get('/problemaTabuada/{testNumber}', [TestController::class, 'show']); // Teste Number é o valor das verificações...



Route::get('/quest', function () {
    return view('questao');
});

Route::get('/comparison', function () {
    return view('submission.comparison');
})->name('comparison');


use App\Http\Controllers\Judge0Controller;

Route::post('/submit', [Judge0Controller::class, 'submitCode']);
