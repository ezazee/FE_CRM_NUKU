<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\MdUserController;
use App\Http\Controllers\MdDriverController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MdMerchantController;
use App\Http\Controllers\TotalTopupController;
use App\Http\Controllers\MitraKabupatenController;
use App\Http\Controllers\PromosiController;

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


// Home Routing
Route::get('/', function () {
    return view('index');
});


// Routing Profile Admin
Route::get('/profile', function () {
    return view('pages.profile.index');
});


                            // ~~ Menu Sidebar ~~ //


// Menu Mitra Kabupaten Routing
Route::get('/mitra-kabupaten', [MitraKabupatenController::class, 'index'])->name('mitrakab');
Route::get('/mitra-kabupaten/create', [MitraKabupatenController::class, 'create'])->name('mitrakab.create');
Route::get('/mitra-kabupaten/edit', [MitraKabupatenController::class, 'edit'])->name('mitrakab.edit');
//  END Menu Mitra Kabupaten Routing


// Menu Role Akses Routing
Route::get('/role-akses', function () {
    return view('pages.role-akses.index');
});
//  END Menu Role Akses Routing



// Menu Transaksi
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/transaksi/details_anterin', [TransaksiController::class, 'details_anterin'])->name('transaksi.details_anterin');
Route::get('/transaksi/details_belanjain', [TransaksiController::class, 'details_belanjain'])->name('transaksi.details_belanjain');
Route::get('/transaksi/details_kirimin', [TransaksiController::class, 'details_kirimin'])->name('transaksi.details_kirimin');
// END Menu Transaksi



// Menu Master Data
    // Menu Mitra Merchant Routing
        Route::get('/md-merchant', [MdMerchantController::class, 'index'])->name('mdmerchant');
        Route::get('/md-merchant/details', [MdMerchantController::class, 'details'])->name('mdmerchant.details');


        // Menu Mitra Driver Routing
        Route::get('/md-driver', [MdDriverController::class, 'index'])->name('mddriver');
        Route::get('/md-driver/details', [MdDriverController::class, 'details'])->name('mddriver.details');

        // Menu User Pengguna Routing
         Route::get('/md-user', [MdUserController::class, 'index'])->name('mduser');
         Route::get('/md-user/details', [MdUserController::class, 'details'])->name('mduser.details');
// END Menu Master Data



// Menu Withdraw Routing
 Route::get('/withdraw', [WithdrawController::class, 'index'])->name('withdraw');
 Route::get('/withdraw/details', [WithdrawController::class, 'details'])->name('withdraw.details');
// END Menu Withdraw Routing



// Menu Total Topup Routing
 Route::get('/total-topup', [TotalTopupController::class, 'index'])->name('totaltop');
 Route::get('/total-topup/details', [TotalTopupController::class, 'details'])->name('totaltop.details');

// END Menu Total Topup Routing


                            // ~~ END Menu Sidebar ~~ //


                            // ~~ Parameter Sidebar ~~ //

// Parameter Biaya Routing
Route::get('/biaya', [BiayaController::class, 'index'])->name('biaya');
// END Parameter Biaya Routing


// Parameter Promosi Routing
Route::get('/promosi', [PromosiController::class, 'index'])->name('promosi');
Route::get('/promosi/create', [PromosiController::class, 'create'])->name('promosi.create');
Route::get('/promosi/edit', [PromosiController::class, 'edit'])->name('promosi.edit');
// END Parameter Promosi Routing


// Parameter Produk Lokal Routing
Route::get('/produk-lokal', function () {
    return view('pages.produk-lokal.index');
});
// END Parameter Produk Lokal Routing


// Parameter Fitur Aplikasi Routing
Route::get('/fitur', function () {
    return view('pages.fitur-aplikasi.index');
});
// END Parameter Fitur Aplikasi Routing


// Parameter Banner Routing
Route::get('/banner', function () {
    return view('pages.banner.index');
});
// END Parameter Banner Routing


// Parameter PPOB Routing
Route::get('/ppob', function () {
    return view('pages.ppob.index');
});
// END Parameter PPOB Routing


                            // ~~ END Parameter Sidebar ~~ //


                            // ~~ Report Sidebar ~~ //

// Report Transaksi Routing
Route::get('/re-transaksi', function () {
    return view('pages.re-transaksi.index');
});
// END Report Transaksi Routing


// Report Mitra
    // Report Mitra Merchant Routing
    Route::get('/re-merchant', function () {
        return view('pages.re-mitra.merchant.index');
    });


    // Report Mitra Driver Routing
    Route::get('/re-driver', function () {
        return view('pages.re-mitra.driver.index');
    });
// END Report Mitra


// Report User Pengguna Routing
Route::get('/user-pengguna', function () {
    return view('pages.re-pengguna.index');
});
// END Report User Pengguna Routing


// Report Finance Routing
Route::get('/finance', function () {
    return view('pages.re-finance.index');
});
// END Report Finance Routing


                            // ~~ END Report Sidebar ~~ //