<?php

use App\Http\Controllers\DashboardReportController;
use Illuminate\Support\Facades\Route;

// Route::get('', function () {
//     return view('dashboard');
// });

Route::get('/', [DashboardReportController::class, 'index']);
