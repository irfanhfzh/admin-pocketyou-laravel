<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminLogisticsController;
use App\Http\Controllers\AdminManagesController;
use App\Http\Controllers\AdminPayoutsController;
use App\Http\Controllers\AdminTransactionsController;
use App\Http\Controllers\AdminUsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return redirect('/admin');
});
Route::prefix('admin')->group(function() {
    Route::get('/', [AdminDashboardController::class, 'dashboard']);
    Route::prefix('users')->group(function() {
        Route::get('/', [AdminUsersController::class, 'users']);
        Route::get('/pre_purchase', [AdminUsersController::class, 'pre_purchase']);
        Route::get('/incoming_funds', [AdminUsersController::class, 'incoming_funds']);
        Route::get('/outcomes_funds', [AdminUsersController::class, 'outcomes_funds']);
    });
    Route::prefix('manages')->group(function() {
        Route::get('/promo', [AdminManagesController::class, 'promo']);
        Route::get('/digital_price', [AdminManagesController::class, 'digital_price']);
        Route::get('/gold_price', [AdminManagesController::class, 'gold_price']);
        Route::get('/product', [AdminManagesController::class, 'product']);
        Route::get('/package', [AdminManagesController::class, 'package']);
        Route::get('/crazy_deals', [AdminManagesController::class, 'crazy_deals']);
        Route::get('/royalty_ongoing', [AdminManagesController::class, 'royalty_ongoing']);
        Route::get('/royalty_settlement', [AdminManagesController::class, 'royalty_settlement']);
    });
    Route::prefix('transactions')->group(function() {
        Route::get('/pre_purchase', [AdminTransactionsController::class, 'pre_purchase']);
        Route::get('/sales_order', [AdminTransactionsController::class, 'sales_order']);
        Route::get('/upgrade_account', [AdminTransactionsController::class, 'upgrade_account']);
        Route::get('/restock', [AdminTransactionsController::class, 'restock']);
        Route::get('/digital', [AdminTransactionsController::class, 'digital']);
    });
    Route::prefix('payouts')->group(function() {
        Route::get('/withdrawal', [AdminPayoutsController::class, 'withdrawal']);
        Route::get('/redeem', [AdminPayoutsController::class, 'redeem']);
    });
    Route::prefix('logistics')->group(function() {
        Route::get('/product_order', [AdminLogisticsController::class, 'product_order']);
        Route::get('/redeem', [AdminLogisticsController::class, 'redeem']);
    });
});