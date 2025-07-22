<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ProfileController;


// Cadastro
Route::get('/cadastro', [CadastroController::class, 'adicionar'])->name('cadastro.adicionar.get');

Route::post('/cadastro', [CadastroController::class, 'adicionar'])->name('cadastro.adicionar.post');


Route::get('/', function () {
    return view('index', ['page' => 'index' ]);
})->name('index');


Route::get('/cadastro', function (){
    return view('cadastro', ['page' => 'cadastro' ]);
})->name('register');



Route::get('/courses', function () {
    return view('courses', ['page' => 'courses' ]);
})->name('courses');

Route::get('/login', function () {
    return view('login', ['page' => 'login' ]);
})->name('login');

Route::get('/desc', function () {
    return view('desc', ['page' => 'desc' ]);
});

Route::get('/about', function () {
    return view('about', ['page' => 'about' ]);
})->name('about');

Route::get('/video', function () {
    return view('video-aula', ['page' => 'video-aula' ]);
})->name('video');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/verify', function () {
    return view('verifycertificate', ['page' => 'verifycertificate' ]);
})->name('verify');

Route::get('/mycourses', function () {
    return view('mycourses', ['page' => 'mycourses' ]);
})->name('mycourses');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
