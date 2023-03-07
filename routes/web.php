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
    return view('welcome');
});

Route::get('/dashboard-ia', function () {
    return view('dashboard-ia');
});


//AUDITEE
Route::get('/dashboard-auditee', function () {
    return view('auditee.dashboard-auditee');
});
Route::get('/bukti-auditee', function () {
    return view('auditee.kelengkapan-bukti.kelengkapan-auditee');
});
Route::get('/riwayat-auditee', function () {
    return view('auditee.riwayat-kelengkapan-bukti.historyKelengkapan-auditee');
});
Route::get('/tindak-bukti-auditee', function () {
    return view('auditee.riwayat-kelengkapan-bukti.tindakBukti-auditee');
});
// form tindak kelengkapan-bukti
Route::get('/form-bukti-auditee', function () {
    return view('auditee.kelengkapan-bukti.form-kelengkapan-bukti');
});

// AUDITOR
Route::get('/dashboard-auditor', function () {
    return view('auditor.dashboard.dashboard-auditor');
});
Route::get('/edit-profile-auditor',function(){
    return view('auditor.dashboard.setting-profile-auditor');
});
Route::get('/profile-auditor',function(){
    return view('auditor.dashboard.profil-auditor');
});
Route::get('/tenggat-waktu-auditor',function(){
    return view('auditor.tenggat waktu.tenggat-waktu-auditor');
});
Route::get('/daftar-audit-auditor',function(){
    return view('auditor.daftar-audit-auditor.daftar-audit-auditor');
});
Route::get('form-persetujuan-auditor-email',function(){
    return view('auditor.email-auditor.form-persetujuan-auditor');
});
Route::get('/daftar-penugasan-audit',function(){
    return view('auditor.daftar-penugasan-audit.daftar-penugasan-audit');
});
Route::get('/form-persetujuan',function(){
    return view('auditor.daftar-penugasan-audit.form-persetujuan');
});
Route::get('/form-tindak-auditor',function(){
    return view('auditor.daftar-audit-auditor.form-tindak-auditor');
});