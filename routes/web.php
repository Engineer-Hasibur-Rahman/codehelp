<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

/*--------------------------------------------------------------------------
| Ajax product crud all route list
|--------------------------------------------------------------------------*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'allshowProduct'])->name('show.product');

Route::get('/data', [ProductController::class, 'dataProduct'])->name('data.product');

// Route::post('product/store', [ProductController::class, storeProduct()->name('store.product')]);
// Route::post('product/update', [ProductController::class, updateProduct()->name('update.product')]);
// Route::post('product/delete', [ProductController::class, deleteProduct()->name('delete.product')]);
