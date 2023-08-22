<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Regular\RegularDashboardController;
use App\Http\Controllers\Regular\RegularUsersController;
use App\Http\Controllers\Regular\RegularManagesController;
use App\Http\Controllers\Regular\RegularTransactionsController;
use App\Http\Controllers\Regular\RegularPayoutsController;
use App\Http\Controllers\Regular\RegularLogisticsController;
use App\Http\Controllers\Vip\VipDashboardController;
use App\Http\Controllers\Vip\VipManagesController;
use App\Http\Controllers\Vip\VipUsersController;
use App\Http\Controllers\Vip\VipTransactionsController;
use App\Http\Controllers\Vip\VipPayoutsController;
use App\Http\Controllers\Retail\RetailDashboardController;
use App\Http\Controllers\Retail\RetailManagesController;
use App\Http\Controllers\Retail\RetailUsersController;
use App\Http\Controllers\Retail\RetailTransactionsController;
use App\Http\Controllers\Retail\RetailPayoutsController;

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
    return redirect()->route('regular');
});

// Regular
Route::prefix('regular')->group(function() {
    Route::get('/', [RegularDashboardController::class, 'dashboard'])->name('regular');
    Route::prefix('users')->group(function() {
        Route::get('/', [RegularUsersController::class, 'users'])->name('regular.users');
        Route::get('/pre_purchase', [RegularUsersController::class, 'pre_purchase'])->name('regular.users.pre_purchase');
        Route::get('/incoming_funds', [RegularUsersController::class, 'incoming_funds'])->name('regular.users.incoming_funds');
        Route::get('/outcomes_funds', [RegularUsersController::class, 'outcomes_funds'])->name('regular.users.outcomes_funds');
    });
    Route::prefix('manages')->group(function() {
        Route::get('/promo', [RegularManagesController::class, 'promo'])->name('regular.manages.promo');
        Route::get('/digital_price', [RegularManagesController::class, 'digital_price'])->name('regular.manages.digital_price');
        Route::get('/gold_price', [RegularManagesController::class, 'gold_price'])->name('regular.manages.gold_price');
        Route::get('/product', [RegularManagesController::class, 'product'])->name('regular.manages.product');
        Route::get('/package', [RegularManagesController::class, 'package'])->name('regular.manages.package');
        Route::get('/crazy_deals', [RegularManagesController::class, 'crazy_deals'])->name('regular.manages.crazy_deals');
        Route::get('/royalty_ongoing', [RegularManagesController::class, 'royalty_ongoing'])->name('regular.manages.royalty_ongoing');
        Route::get('/royalty_settlement', [RegularManagesController::class, 'royalty_settlement'])->name('regular.manages.royalty_settlement');
    });
    Route::prefix('transactions')->group(function() {
        Route::get('/pre_purchase', [RegularTransactionsController::class, 'pre_purchase'])->name('regular.transactions.pre_purchase');
        Route::get('/sales_order', [RegularTransactionsController::class, 'sales_order'])->name('regular.transactions.sales_order');
        Route::get('/upgrade_account', [RegularTransactionsController::class, 'upgrade_account'])->name('regular.transactions.upgrade_account');
        Route::get('/restock', [RegularTransactionsController::class, 'restock'])->name('regular.transactions.restock');
        Route::get('/digital', [RegularTransactionsController::class, 'digital'])->name('regular.transactions.digital');
    });
    Route::prefix('payouts')->group(function() {
        Route::get('/withdrawal', [RegularPayoutsController::class, 'withdrawal'])->name('regular.payouts.withdrawal');
        Route::get('/redeem', [RegularPayoutsController::class, 'redeem'])->name('regular.payouts.redeem');
    });
    Route::prefix('logistics')->group(function() {
        Route::get('/product_order', [RegularLogisticsController::class, 'product_order'])->name('regular.logistics.product_order');
        Route::get('/redeem', [RegularLogisticsController::class, 'redeem'])->name('regular.logistics.redeem');
    });
});

// VIP
Route::prefix('vip')->group(function() {
    Route::get('/', [VipDashboardController::class, 'dashboard'])->name('vip');
    Route::prefix('manages')->group(function() {
        Route::get('/vip_merchant', [VipManagesController::class, 'vip_merchant'])->name('vip.manages.vip_merchant');
        Route::get('/ads_blast', [VipManagesController::class, 'ads_blast'])->name('vip.manages.ads_blast');
    });
    Route::prefix('users')->group(function() {
        Route::get('/', [VipUsersController::class, 'users'])->name('vip.users');
    });
    Route::prefix('transactions')->group(function() {
        Route::get('/pre_allocation', [VipTransactionsController::class, 'pre_allocation'])->name('vip.transactions.pre_allocation');
        Route::get('/sales_order', [VipTransactionsController::class, 'sales_order'])->name('vip.transactions.sales_order');
        Route::get('/voucher_reward', [VipTransactionsController::class, 'voucher_reward'])->name('vip.transactions.voucher_reward');
        Route::get('/send_reward', [VipTransactionsController::class, 'send_reward'])->name('vip.transactions.send_reward');
    });
    Route::prefix('payouts')->group(function() {
        Route::get('/withdrawal', [VipPayoutsController::class, 'withdrawal'])->name('vip.payouts.withdrawal');
    });
});

// Retail
Route::prefix('retail')->group(function() {
    Route::get('/', [RetailDashboardController::class, 'dashboard'])->name('retail');
    Route::prefix('manages')->group(function() {
        Route::get('/retail_merchant', [RetailManagesController::class, 'retail_merchant'])->name('retail.manages.retail_merchant');
        Route::get('/ads_blast', [RetailManagesController::class, 'ads_blast'])->name('retail.manages.ads_blast');
    });
    Route::prefix('users')->group(function() {
        Route::get('/', [RetailUsersController::class, 'users'])->name('retail.users');
    });
    Route::prefix('transactions')->group(function() {
        Route::get('/pre_allocation', [RetailTransactionsController::class, 'pre_allocation'])->name('retail.transactions.pre_allocation');
        Route::get('/sales_order', [RetailTransactionsController::class, 'sales_order'])->name('retail.transactions.sales_order');
    });
    Route::prefix('payouts')->group(function() {
        Route::get('/withdrawal', [RetailPayoutsController::class, 'withdrawal'])->name('retail.payouts.withdrawal');
    });
});
