<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/',[ContactController::class, 'home'])->name('welcome');
Route::get('/contact-us',[ContactController::class, 'contactView'])->name('contact-us');
Route::post('/contact-saved',[ContactController::class, 'contactSave'])->name('contact-saved');