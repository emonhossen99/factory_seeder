<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;


Route::resource('/form', formController::class);
