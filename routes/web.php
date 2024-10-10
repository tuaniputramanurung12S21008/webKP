<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;

// Route for Home page
Route::get('/', [ContactController::class, 'home'])->name('home');

// Route for About Us page
Route::get('/about', [ContactController::class, 'about'])->name('about');

// Route for Product page
Route::get('/product', [ContactController::class, 'product'])->name('product');

// Route for Contact page
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

// Route for Product Detail page
Route::get('/product-detail', [ContactController::class, 'productDetail'])->name('product-detail');

// Route for sending contact form
Route::post('/send', [ContactController::class, 'send'])->name('contact.send');

// Route For Send Email
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::post('/send-email', [EmailController::class, 'sendEmail']);

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');