<?php

// Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Packages
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('daftar', function () {
    return view('admin.auth.register', [
      
    ]);
})->name('index');





Route::get('admin', function () {
    return view('admin.index', [
        'title' => 'Home'
    ]);
})->name('index');


Route::get('/kanban', function () {
    return view('admin.kanban',[
        "title" => "Kanban"
    ]);
})->name('kanban');

Route::get('/acces', function () {
    return view('admin.acces',[
        "title" => "Role & Permission"
    ]);
})->name('acces');



/*
|------------------------------
|  Form Daftar dan login admin
|------------------------------
*/
// Route untuk form pendaftaran
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Route untuk form login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

/*
|------------------------------
|  Logout
|------------------------------
*/
Route::post('logout', function () {
    Auth::logout();
    return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
})->name('logout');


Route::middleware(['admin'])->prefix('admin')->group(function () {
    // Tambahkan rute-rute admin di sini
    // Contoh: Route::get('dashboard', 'AdminController@dashboard');
});
