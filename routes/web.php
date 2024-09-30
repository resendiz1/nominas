<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;



Route::get('/', [Controller::class, 'login_show'])->name('login.show');

