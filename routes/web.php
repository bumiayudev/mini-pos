<?php

use App\Livewire\ProductList;
use App\Livewire\Products\CreateProduct;
use App\Livewire\Products\EditProduct;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/product', ProductList::class)
   ->middleware(['auth'])
    ->name('product')
; 

Route::get('/product/create', CreateProduct::class)
   ->middleware(['auth'])
    ->name('product.create')
; 

Route::get('/product/edit/{id}', EditProduct::class)
   ->middleware(['auth'])
    ->name('product.edit')
; 

require __DIR__.'/auth.php';
