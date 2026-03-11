<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\PesertaPelatihanController;
use App\Http\Controllers\VolumeLimasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Models\Attendance;
use App\Models\Role;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inc.navbar');
});

Route::get('perhitungan', function () {
    return view('perhitungan.index');
})->name('perhitungan.index');



Route::post('perhitungan', [PerhitunganController::class, 'store'])->name('perhitungan.store');

// lp kubus
Route::get('luaspermukaankubus', [PerhitunganController::class, 'index'])->name('luaspermukaankubus.index');
Route::post('luaspermukaankubus', [PerhitunganController::class, 'storeLpKubus'])->name('luaspermukaankubus.store');

// volume kubus
Route::get('volumekubus', [PerhitunganController::class, 'indexVolumeKubus'])->name('volumekubus.index');
Route::post('volumekubus', [PerhitunganController::class, 'storeVolumeKubus'])->name('volumekubus.store');

// lp tabung
Route::get('luaspermukaantabung', [PerhitunganController::class, 'indexLpTabung'])->name('luaspermukaantabung.index');
Route::post('luaspermukaantabung', [PerhitunganController::class, 'storeLpTabung'])->name('luaspermukaantabung.store');

// volume tabung
Route::get('volumetabung', [PerhitunganController::class, 'indexVolumeTabung'])->name('volumetabung.index');
Route::post('volumetabung', [PerhitunganController::class, 'storeVolumeTabung'])->name('volumetabung.store');

// volume limas
// Route::get('/volumelimas', [VolumeLimasController::class, 'index'])->name('volumelimas.index');

// Route::get('/volumelimas/create', [VolumeLimasController::class, 'create'])->name('volumelimas.create');

// Route::post('/volumelimas/store', [VolumeLimasController::class, 'store'])->name('volumelimas.store');

// Route::get('/volumelimas/edit/{id}', [VolumeLimasController::class, 'edit'])->name('volumelimas.edit');

// Route::put('/volumelimas/update/{id}', [VolumeLimasController::class, 'update'])->name('volumelimas.update');

// Route::delete('/volumelimas/delete/{id}', [VolumeLimasController::class, 'destroy'])->name('volumelimas.destroy');

Route::resource('volumelimas', VolumeLimasController::class);

Route::resource('pesertapelatihan', PesertaPelatihanController::class);

Route::get('belajar-laravel', [BelajarController::class, 'index']);
Route::get('siswa', [BelajarController::class, 'getSiswa']);

Route::get('create', [BelajarController::class, 'create'])->name('siswa.create');
Route::post('store', [BelajarController::class, 'store'])->name('siswa.store');

Route::get('/', [LoginController::class, 'index']);
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);
Route::resource('student', StudentController::class);
Route::resource('attendance', AttendanceController::class);

//
Route::get('dashboard', [DashboardController::class, 'index']);

// CREATE READ UPDATE DELETE (CRUD)
// post = untuk mengirim data (CREATE)
// get = untuk melihat atau menampilkan data (READ)
// put = untuk merubah atau mengedit data (UPDATE)
// delete = menghapus data (DELETE)

// volume kubus = s^3
//  LP Balok = 2 * (p*l+p*t+l*t)
// volume tabung = 3.14 * r^2 * t
// LP tabung = 2 * 3.14 * r * (r+t)
