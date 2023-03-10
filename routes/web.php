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

// IA Section
Route::get('/dashboard-ia', function () {
    return view('ia.dashboard-ia');
});
Route::get('/perintah-audit-ia', function () {
    return view('ia.perintah-audit');
});

Route::get('/audit-aktif-ia', function () {
    return view('ia.audit-aktif');
});

Route::get('/lihat-tahap-ia', function () {
    return view('ia.lihat-tahap');
});

Route::get('/laporan-audit-ia', function () {
    return view('ia.laporan-audit');
});

Route::get('/tenggat-waktu-ia', function () {
    return view('ia.tenggat-waktu');
});

Route::get('/manajemen-framework-ia', function () {
    return view('ia.manajemen-framework');
});

Route::get('/daftar-auditor-ia', function () {
    return view('ia.daftar-auditor');
});

Route::get('/profil-auditor-ia', function () {
    return view('ia.profil-auditor');
});

Route::get('/detail-laporan-ia', function () {
    return view('ia.detail-laporan');
});

Route::get('/tindak-tahap1-ia', function () {
    return view('ia.tindak-tahap1');
});

Route::get('/tindak-tahap2-ia', function () {
    return view('ia.tindak-tahap2');
});

Route::get('/tindak-tahap3-ia', function () {
    return view('ia.tindak-tahap3');
});

Route::get('/tindak-tahap4-ia', function () {
    return view('ia.tindak-tahap4');
});

Route::get('/tindak-tahap5-ia', function () {
    return view('ia.tindak-tahap5');
});

Route::get('/tindak-tahap6-ia', function () {
    return view('ia.tindak-tahap6');
});

Route::get('/tindak-tahap6-rekomendasi-ia', function () {
    return view('ia.tindak-tahap6-rekomendasi');
});

Route::get('/tindak-tahap7-ia', function () {
    return view('ia.tindak-tahap7');
});


// End of IA section

// YPTA Section
Route::get('/dashboard-ypta', function () {
    return view('ypta.dashboard-ypta');
});

Route::get('/audit-aktif-ypta', function () {
    return view('ypta.audit-aktif');
});

Route::get('/lihat-tahap-ypta', function () {
    return view('ypta.lihat-tahap');
});

Route::get('/laporan-audit-ypta', function () {
    return view('ypta.laporan-audit');
});

Route::get('/detail-laporan-ypta', function () {
    return view('ypta.detail-laporan');
});

Route::get('/daftar-auditor-ypta', function () {
    return view('ypta.daftar-auditor');
});

Route::get('/profil-auditor-ypta', function () {
    return view('ypta.profil-auditor');
});
// End of YPTA Section

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
Route::get('/edit-profile-auditor', function () {
    return view('auditor.dashboard.setting-profile-auditor');
});
Route::get('/profile-auditor', function () {
    return view('auditor.dashboard.profil-auditor');
});
Route::get('/tenggat-waktu-auditor', function () {
    return view('auditor.tenggat waktu.tenggat-waktu-auditor');
});
Route::get('/daftar-audit-auditor', function () {
    return view('auditor.daftar-audit-auditor.daftar-audit-auditor');
});
Route::get('form-persetujuan-auditor-email', function () {
    return view('auditor.email-auditor.form-persetujuan-auditor');
});
Route::get('/daftar-penugasan-audit', function () {
    return view('auditor.daftar-penugasan-audit.daftar-penugasan-audit');
});
Route::get('/form-persetujuan', function () {
    return view('auditor.daftar-penugasan-audit.form-persetujuan');
});
Route::get('/form-tindak-auditor', function () {
    return view('auditor.daftar-audit-auditor.form-tindak-auditor');
});
