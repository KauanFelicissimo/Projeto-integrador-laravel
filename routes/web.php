<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
   return 'Está é a página home';
 
});

Route::get('/cursos', function (){
   return 'Está é a página de cursos';
 
});

Route::get('/destalhes', function (){
   return 'Está é a página da descrição dos cursos';
 
});

Route::get('/log-in', function (){
   return 'Está é a página de login dos site';
 
});

Route::get('/cadastro', function (){
   return 'Está é a página de cadastro';
 
});

Route::get('/recuperação', function (){
   return 'Está é a página para recuperar a sua senha';
 
});

Route::get('/meus-cursos', function (){
   return 'Está é a página home';
 
});



