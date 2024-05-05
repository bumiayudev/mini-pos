<?php

use App\Livewire\ProductList;
use App\Livewire\Products\CreateProduct;
use App\Livewire\Products\EditProduct;
use App\Livewire\Trans\CreateTrans;
use App\Livewire\Trans\EditTrans;
use App\Livewire\TransList;
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

Route::get('/trans', TransList::class)
   ->middleware(['auth'])
    ->name('trans')
; 

Route::get('/trans/create', CreateTrans::class)
   ->middleware(['auth'])
    ->name('trans.create')
; 

Route::get('/trans/edit/{id}', EditTrans::class)
   ->middleware(['auth'])
    ->name('trans.edit')
; 
require __DIR__.'/auth.php';
