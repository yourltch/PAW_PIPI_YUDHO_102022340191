<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Date;


Route::get('/dashboard', function () {
    return view('dashboard', [
        'time' => now()->format('H:i:s'),
        'date' => now()->format('d-m-Y'),
    ]);
});

// ==================1==================
// Add a GET route to /dashboard that calls the index() method from DashboardController