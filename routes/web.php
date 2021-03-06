<?php

use Illuminate\Support\Facades\Route;

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
    return view('ecommerce-dashboard');
})->name('index');

Route::get('ecommerce-dashboard', function () {
    return view('ecommerce-dashboard');
})->name('ecommerce-dashboard');
Route::get('login/google/ecommerce-dashboard', function () {
    return view('ecommerce-dashboard');
})->name('ecommerce-dashboard');
// Download File
// user-manual
Route::get('user-manual', 'Data2Controller@user_manual');
// Route::get('/download', function () {
// 	$filepath=public_path()."/UTS_Implementasi_DS_151811513016.pdf";
// 	$filename="Dokumentasi dan User Manual.pdf";
// 	$headers=array('Content-Type' => 'application/pdf');

// 	if(file_exists($filepath)){
//         // Send Download
//         return \Response::download( $filepath, $filename, $headers );
//     } else {
//         // Error
//         exit( 'Requested file does not exist on our server!' );
//     }
// });

// //login
// Route::get('/','OtentifikasiController@index');
// Route::post('login','OtentifikasiController@login');

// //Login with sosial media
// Route::get('login/google','OtentifikasiController@redirectToProvider');
// Route::get('login/google/callback','OtentifikasiController@handleProviderCallback');

// //Profile
// Route::get('login/google/profile','OtentifikasiController@profill');

// Route::get('login/google/dropdownlist/getstates/{id}','Data2Controller@getStates');
// Route::get('login/google/dropdownlist/getkecamatan/{id}','Data2Controller@getKecamatan');
// Route::get('login/google/dropdownlist/getkelurahan/{id}','Data2Controller@getKelurahan');
// Route::get('login/google/dropdownlist/getkodepos/{id}','Data2Controller@getKodepos');

// ///tampil
// Route::get('login/google/dropdownlist','Data2Controller@getCountries');
// Route::get('login/google/dropdownlist1','Data2Controller@getCountries1');
// //save
// Route::post('login/google/customerstore1', 'Data2Controller@customer_store1');
// Route::post('login/google/customerstore2', 'Data2Controller@customer_store2');

// Route::get('login/google/indexdropdown', 'Data2Controller@index')->name('dropdownindex');
// Route::get('login/google/indexdropdown1', 'Data2Controller@index1');



// Route::post('login/google/customerimport', 'Data2Controller@import_excel');
//Route::post('login/google/customerimport', 'Data2Controller@import');

// Route::get('login/google/customerimport', 'CustomerImportController@show');
// Route::post('login/google/customerimport', 'CustomerImportController@store');



// Route::get('login/google/barcode','BarcodeController@barcode');
// Route::get('login/google/pdf-barcode/{id}', 'BarcodeController@pdf_barcode');
// Route::get('login/google/test-barcode', 'BarcodeController@test_barcode');
// Route::post('login/google/barangimport', 'BarcodeController@import');

// //TOKO
// Route::get('login/google/barcodetoko','BarcodeTokoController@barcode');
// Route::get('login/google/cetakbarcodetoko/{id}', 'BarcodeTokoController@pdf_barcode');
// Route::get('login/google/scanbarcodetoko', 'BarcodeTokoController@test_barcode');
// Route::post('login/google/insertlokasi', 'BarcodeTokoController@insert');
// Route::get('login/google/geolocation', 'GeolocationController@index');
// Route::get('login/google/barcode/getbarcode/{id}','BarcodeTokoController@getBarcode');

//===============================================================================================================

//GitHub
Route::get('login/github','OtentifikasiController@redirectToProvider1');
Route::get('login/github/callback','OtentifikasiController@handleProviderCallback1');

Route::get('dropdownlist/getstates/{id}','Data2Controller@getStates');
Route::get('dropdownlist/getkecamatan/{id}','Data2Controller@getKecamatan');
Route::get('dropdownlist/getkelurahan/{id}','Data2Controller@getKelurahan');
Route::get('dropdownlist/getkodepos/{id}','Data2Controller@getKodepos');

///tampil
Route::get('dropdownlist','Data2Controller@getCountries');
Route::get('dropdownlist1','Data2Controller@getCountries1');
//save
Route::post('customerstore1', 'Data2Controller@customer_store1');
Route::post('customerstore2', 'Data2Controller@customer_store2');

Route::get('customerimport', 'CustomerImportController@show');
Route::post('customerimport', 'CustomerImportController@store');

Route::get('indexdropdown', 'Data2Controller@index')->name('dropdownindex');
Route::get('indexdropdown1', 'Data2Controller@index1');

Route::get('barcode','BarcodeController@barcode');
Route::get('pdf-barcode/{id}', 'BarcodeController@pdf_barcode');
Route::get('test-barcode', 'BarcodeController@test_barcode');

//TOKO
Route::get('barcodetoko','BarcodeTokoController@barcode');
Route::get('cetakbarcodetoko/{id}', 'BarcodeTokoController@pdf_barcode');
Route::get('scanbarcodetoko', 'BarcodeTokoController@test_barcode');
Route::post('insertlokasi', 'BarcodeTokoController@insert');
Route::get('geolocation', 'GeolocationController@index');
Route::get('barcode/getbarcode/{id}','BarcodeTokoController@getBarcode');

//SCOREBOARD
// Scoreboard
Route::get('scoreboard', 'ScoreboardController@scoreboard_index');
Route::get('/scoreboard-controller', 'ScoreboardController@controller_index');
Route::post('/scoreboard-controller/update', 'ScoreboardController@controller_store');

Route::get('/messages', 'ScoreboardController@message');

Route::get('display_scoreboard', 'controllerscoreboard@scoreboard_index');
Route::get('kontrol_scoreboard', 'controllerscoreboard@controller_index');
Route::get('sse', 'controllerscoreboard@update_sse');

Route::post('store-home','controllerscoreboard@store_home');
Route::post('store-away','controllerscoreboard@store_away');
Route::post('store-homeplus2','controllerscoreboard@scorehomeplus2');
Route::post('store-homeminus2','controllerscoreboard@scorehomeminus2');
Route::post('store-homeplus3','controllerscoreboard@scorehomeplus3');
Route::post('store-homeminus3','controllerscoreboard@scorehomeminus3');
Route::post('store-awayplus2','controllerscoreboard@scoreawayplus2');
Route::post('store-awayminus2','controllerscoreboard@scoreawayminus2');
Route::post('store-awayplus3','controllerscoreboard@scoreawayplus3');
Route::post('store-awayminus3','controllerscoreboard@scoreawayminus3');
Route::post('store-sound1','controllerscoreboard@store_sound1');
Route::post('store-sound2','controllerscoreboard@store_sound2');
Route::post('store-sound3','controllerscoreboard@store_sound3');
Route::post('update-sound','controllerscoreboard@update_sound');
Route::post('update-menit-detik','controllerscoreboard@update_menit_detik');
Route::post('reset-menit-detik','controllerscoreboard@reset_menit_detik');
Route::post('resume-menit-detik','controllerscoreboard@resume_menit_detik');
Route::post('stop-menit-detik','controllerscoreboard@stop_menit_detik');

Route::post('store-homefouls','controllerscoreboard@scorehomefouls');
Route::post('store-awayfouls','controllerscoreboard@scoreawayfouls');
Route::post('store-homefoulsmin','controllerscoreboard@fouls_homeminus');
Route::post('store-awayfoulsmin','controllerscoreboard@fouls_awayminus');

Route::post('store-periodplus','controllerscoreboard@period_plus');
Route::post('store-periodmin','controllerscoreboard@period_min');

Route::post('store-reset','controllerscoreboard@reset_pertandingan');


//=========================================================================================

Route::get('orders', function () {
    return view('orders');
})->name('orders');

Route::get('product-list', function () {
    return view('product-list');
})->name('product-list');

Route::get('product-grid', function () {
    return view('product-grid');
})->name('product-grid');

Route::get('product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::get('analytics-dashboard', function () {
    return view('analytics-dashboard');
})->name('analytics-dashboard');

Route::get('helpdesk-dashboard', function () {
    return view('helpdesk-dashboard');
})->name('helpdesk-dashboard');

Route::get('chat', function () {
    return view('chat');
})->name('chat');

Route::get('mail', function () {
    return view('mail');
})->name('mail');

Route::get('todo-list', function () {
    return view('todo-list');
})->name('todo-list');

Route::get('file-manager', function () {
    return view('file-manager');
})->name('file-manager');

Route::get('calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('invoice', function () {
    return view('invoice');
})->name('invoice');

Route::get('user-list', function () {
    return view('user-list');
})->name('user-list');

Route::get('user-edit', function () {
    return view('user-edit');
})->name('user-edit');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('recovery-password', function () {
    return view('recovery-password');
})->name('recovery-password');

Route::get('lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('alert', function () {
    return view('alert');
})->name('alert');

Route::get('accordion', function () {
    return view('accordion');
})->name('accordion');

Route::get('buttons', function () {
    return view('buttons');
})->name('buttons');

Route::get('dropdown', function () {
    return view('dropdown');
})->name('dropdown');

Route::get('list-group', function () {
    return view('list-group');
})->name('list-group');

Route::get('pagination', function () {
    return view('pagination');
})->name('pagination');

Route::get('typography', function () {
    return view('typography');
})->name('typography');

Route::get('media-object', function () {
    return view('media-object');
})->name('media-object');

Route::get('progress', function () {
    return view('progress');
})->name('progress');

Route::get('modal', function () {
    return view('modal');
})->name('modal');

Route::get('spinners', function () {
    return view('spinners');
})->name('spinners');

Route::get('navs', function () {
    return view('navs');
})->name('navs');

Route::get('tab', function () {
    return view('tab');
})->name('tab');

Route::get('tooltip', function () {
    return view('tooltip');
})->name('tooltip');

Route::get('popovers', function () {
    return view('popovers');
})->name('popovers');

Route::get('basic-cards', function () {
    return view('basic-cards');
})->name('basic-cards');

Route::get('image-cards', function () {
    return view('image-cards');
})->name('image-cards');

Route::get('scrollable-cards', function () {
    return view('scrollable-cards');
})->name('scrollable-cards');

Route::get('other-cards', function () {
    return view('other-cards');
})->name('other-cards');

Route::get('basic-tables', function () {
    return view('basic-tables');
})->name('basic-tables');

Route::get('dataTable', function () {
    return view('dataTable');
})->name('dataTable');

Route::get('responsive-tables', function () {
    return view('responsive-tables');
})->name('responsive-tables');

Route::get('apexchart', function () {
    return view('apexchart');
})->name('apexchart');

Route::get('justgage', function () {
    return view('justgage');
})->name('justgage');

Route::get('peity', function () {
    return view('peity');
})->name('peity');

Route::get('google-map', function () {
    return view('google-map');
})->name('google-map');

Route::get('vector-map', function () {
    return view('vector-map');
})->name('vector-map');

Route::get('avatar', function () {
    return view('avatar');
})->name('avatar');

Route::get('icons', function () {
    return view('icons');
})->name('icons');

Route::get('colors', function () {
    return view('colors');
})->name('colors');

Route::get('divider', function () {
    return view('divider');
})->name('divider');

Route::get('basic-forms', function () {
    return view('basic-forms');
})->name('basic-forms');

Route::get('custom-forms', function () {
    return view('custom-forms');
})->name('custom-forms');

Route::get('advanced-forms', function () {
    return view('advanced-forms');
})->name('advanced-forms');

Route::get('form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('form-repeater', function () {
    return view('form-repeater');
})->name('form-repeater');

Route::get('file-upload', function () {
    return view('file-upload');
})->name('file-upload');

Route::get('datepicker', function () {
    return view('datepicker');
})->name('datepicker');

Route::get('timepicker', function () {
    return view('timepicker');
})->name('timepicker');

Route::get('colorpicker', function () {
    return view('colorpicker');
})->name('colorpicker');

Route::get('sweet-alert', function () {
    return view('sweet-alert');
})->name('sweet-alert');

Route::get('lightbox', function () {
    return view('lightbox');
})->name('lightbox');

Route::get('toast', function () {
    return view('toast');
})->name('toast');

Route::get('tour', function () {
    return view('tour');
})->name('tour');

Route::get('slick-slide', function () {
    return view('slick-slide');
})->name('slick-slide');

Route::get('nestable', function () {
    return view('nestable');
})->name('nestable');

Route::get('timeline', function () {
    return view('timeline');
})->name('timeline');

Route::get('pricing-table', function () {
    return view('pricing-table');
})->name('pricing-table');

Route::get('pricing-table-2', function () {
    return view('pricing-table-2');
})->name('pricing-table-2');

Route::get('search-result', function () {
    return view('search-result');
})->name('search-result');

Route::get('blank-page', function () {
    return view('blank-page');
})->name('blank-page');

Route::get('404', function () {
    return view('404');
})->name('404');

Route::get('503', function () {
    return view('503');
})->name('503');

Route::get('mean-at-work', function () {
    return view('mean-at-work');
})->name('mean-at-work');

Route::get('email-template-basic', function () {
    return view('email-template-basic');
})->name('email-template-basic');

Route::get('email-template-alert', function () {
    return view('email-template-alert');
})->name('email-template-alert');

Route::get('email-template-billing', function () {
    return view('email-template-billing');
})->name('email-template-billing');
