<?php

use App\Http\Controllers\AuthController; // <--- Jangan lupa import ini di paling atas!
use App\Http\Controllers\FormController;
use App\Models\Form;
use Illuminate\Support\Facades\Route;

// 1. Route Publik (User biasa)
Route::redirect('/', '/form');
Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form/submit', [FormController::class, 'submit'])->name('form.submit');

// 2. Route Authentication (Gerbang Login & Logout)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 3. Route Khusus Admin (DIPROTEKSI)
Route::middleware(['auth'])->group(function () {

    // CRUD
    Route::get('/form/edit/{id}', [FormController::class, 'edit']);
    Route::put('/form/update/{id}', [FormController::class, 'update']);
    Route::delete('/form/destroy/{id}', [FormController::class, 'destroy']);

    // Dashboard Admin
    Route::get('/admin/dashboard', function () {
        // Cek lagi biar aman, cuma admin yang boleh masuk sini
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Anda bukan Admin!');
        }
        $data = Form::all();
        return view('admin.dashboard', compact('data'));
        })->name('admin.dashboard');

    // Fitur Export (Hanya admin)
    Route::get('/form/export', function () {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Akses Ditolak');
        }
        return app(FormController::class)->export();
    })->name('form.export');
});
