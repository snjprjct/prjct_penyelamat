<?php

use Illuminate\Support\Facades\Route;
use App\Models\paket;
use App\Http\Controllers\paketController;
use App\Models\periode;
use App\Http\Controllers\periodeController;
use App\Http\Controllers\userController;
use App\Models\user;
use App\Models\customer;
use App\Http\Controllers\customerController;
use App\Models\booking;
use App\Models\profil; 
use App\Models\rekening; 
use App\Models\home; 
use App\Models\galery; 
use App\Models\team; 
use App\Http\Controllers\bookingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\profilController; 
use App\Http\Controllers\rekeningController; 
use App\Http\Controllers\homeController; 
use App\Http\Controllers\galeryController; 
use App\Http\Controllers\teamController; 
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
 

Route::get('/', function () {

 
    return view('home', [
        "nama"=> "Siapa ini",
        "user" => "Administrator",
        "aplikasi" => "booking SPP",
        "image" => "gambar.png",
        "objek" => "SMA APA GITU",
        "menu"=>galery::all()
    ]);
}); 

Route::get('/admin', function () {
    return view('dashboard.login.index', [ 
        'title'=> 'login'
        ]
    );
}); 
    //paket komponen
    
    Route::get('/cek', [paketController::class,'paket'])->name('paket.paket');

    Route::get('/paket/get-paket/{paket}', [paketController::class, 'getPaket']);
    Route::get('/paket/checkSlug', [paketController::class, 'checkSlug']);
    Route::resource('/paket', paketController::class)->parameters(['paket' => 'paket']);    Route::get('/riwayat', [bookingController::class,'riwayat'])->name('booking.riwayat');

    


     
     //end paket
    
    
    //periode komponen
    
    Route::get('/periode/checkSlug', [periodeController::class, 'checkSlug']);
    Route::resource('/periode', periodeController::class);
     
    //end periode
      
    
    //customer komponen
    
    //Route::get('/customer/checkSlug', [customerController::class, 'checkSlug']);
    
    Route::get('customer/laporan', [customerController::class, 'laporan'])->name('customer.laporan-customer'); 
    Route::get('customer/laporan-pertanggal/{tglawal}/{tglakhir}', [customerController::class, 'cetakpertanggal'])->name('customer.laporan-pertanggal'); 
    Route::get('customer/laporan-berdasarkan/{berdasarkan}/{isinya}', [customerController::class, 'cetakberdasarkan'])->name('customer.laporan-berdasarkan'); 
    Route::get('customer/laporan-all/', [customerController::class, 'cetakall'])->name('customer.laporan-all'); 
     
    
    Route::resource('/customer', customerController::class); 
    //end customer
    
    //customer komponen
    
    Route::get('/user/checkSlug', [userController::class]);
    Route::resource('/user', userController::class); 
     
    //end customer
    
    
    Route::get('notif-list', function () {
        auth()->user()->notifications->markAsRead();
    })->name('notif.list');
    
    //booking komponen
    
    Route::get('/booking/checkSlug', [bookingController::class, 'checkSlug']);
    Route::get('/booking/cetak_pdf', [bookingController::class, 'cetak_pdf']);
    Route::get('booking/laporan', [bookingController::class, 'laporan'])->name('booking.laporan-booking'); 
    Route::get('booking/laporan-pertanggal/{tglawal}/{tglakhir}', [bookingController::class, 'cetakpertanggal'])->name('booking.laporan-pertanggal'); 
    Route::get('booking/laporan-berdasarkan/{berdasarkan}', [bookingController::class, 'cetakberdasarkan'])->name('booking.laporan-berdasarkan'); 
    Route::get('booking/kartu-customer/{customernya}', [bookingController::class, 'cetakkartu'])->name('booking.kartu-spp'); 
    Route::get('booking/laporan-all/', [bookingController::class, 'cetakall'])->name('booking.laporan-all'); 
    Route::get('/kwitansi', [bookingController::class,'kwitansi']);
    Route::get('/exportlaporan', [bookingController::class,'export']);
    
    Route::post('/booking', [bookingController::class]); 
    Route::get('/riwayat', [bookingController::class,'riwayat'])->name('booking.riwayat');
    Route::post('/booking/cek', [bookingController::class,'cek'])->name('booking.cek');
    Route::resource('/create', bookingController::class);  
    Route::resource('/booking', bookingController::class);
    
    //end booking
     
    
    
    //profil komponen
    
    
    Route::get('/profil/checkSlug', [profilController::class, 'checkSlug']);
    Route::resource('/profil', profilController::class);
    
    //end profil
    
    
    //Galery 
    Route::get('/galery-home', [galeryController::class, 'galeryhome'])->name('galeryhome');
    Route::resource('/galery', galeryController::class);
    Route::resource('/team', teamController::class);
    Route::get('/rekeningbayar', [rekeningController::class,'rekening'])->name('rekening.rekening');


    //End Galery
    
    //rekening komponen
    
    Route::get('/rekening/get-rekening/{rekening}', [rekeningController::class, 'getrekening']);
    Route::get('/rekening/checkSlug', [rekeningController::class, 'checkSlug']);
    Route::resource('/rekening', rekeningController::class); 
    
    //end rekening
    
     
    
     
    Route::get('/registrasi', [customerController::class,'registrasi'])->name('customer.registrasi');

     
    /* 
   Route::get('/login',[LoginController::class, 'index']);
   Route::post('/login',[LoginController::class, 'authenticate']); */
   
   
   Route::post('/logout', [loginController::class,'logout']);
   Route::post('/login', [loginController::class,'authenticate']);
   Route::get('/login', [loginController::class,'index'])->name('login');
   Route::get('/login-home', [loginController::class,'index'])->name('login-home');
   
   Route::get('/dashboard', [homeController::class,'dashboard'])->name('dashboard-admin'); 
// });