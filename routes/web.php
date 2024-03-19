<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/blockchain', [HomeController::class, 'blockchain']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/web-design', [HomeController::class, 'web_design']);
Route::get('/custom-web-design', [HomeController::class, 'custom_web']);
Route::get('/blockchain', [HomeController::class, 'blockchain']);
Route::get('/marketing', [HomeController::class, 'marketing']);
Route::get('/payment-integration', [HomeController::class, 'payment']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/terms-and-conditions', [HomeController::class, 'terms']);



// login Routes 
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('forget-password', [AuthController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');








// Client Routes 
Route::get('dashboard', [ClientController::class, 'index']);























// Admin Routes 
Route::get('/Admin', [AdminController::class, 'index'])->middleware('auth','can:isAdmin');
Route::get('/New-Project', [AdminController::class, 'new_project_form'])->middleware('auth','can:isAdmin');
Route::get('/New-Project-Images/{id}', [AdminController::class, 'see_project_images'])->middleware('auth','can:isAdmin');
Route::get('/Edit-Project/{id}', [AdminController::class, 'edit_project'])->middleware('auth','can:isAdmin');
Route::get('/Send-Confirm-Project-Email/{id}', [AdminController::class, 'project_confirm'])->middleware('auth','can:isAdmin');
Route::get('/Delete-Project/{id}', [AdminController::class, 'delete_project'])->middleware('auth','can:isAdmin');
Route::get('/My-Projects', [AdminController::class, 'my_projects'])->middleware('auth','can:isAdmin');
Route::get('/Register-New-Client', [AdminController::class, 'new_user_form'])->middleware('auth','can:isAdmin');
Route::post('/Post-New-Client', [AdminController::class, 'make_user'])->name('make_user')->middleware('auth','can:isAdmin');
Route::post('/Post-New-Project', [AdminController::class, 'create_project'])->name('create_project')->middleware('auth','can:isAdmin');
Route::post('/Update-Project', [AdminController::class, 'update_project'])->name('update_project')->middleware('auth','can:isAdmin');
Route::get('/My-Clients', [AdminController::class, 'all_clients'])->name('all_clients')->middleware('auth','can:isAdmin');
Route::get('/My-Mails', [AdminController::class, 'my_emails'])->name('my_emails')->middleware('auth','can:isAdmin');
Route::get('/edit-client-account/{id}', [AdminController::class, 'edit_client'])->middleware('auth','can:isAdmin');
Route::get('/delete-client-account/{id}', [AdminController::class, 'delete_client'])->middleware('auth','can:isAdmin');
Route::post('/update-client-account', [AdminController::class, 'update_client_acc'])->name("update_client_acc")->middleware('auth','can:isAdmin');
Route::get('/Admin-Mail-Box', [AdminController::class, 'Mail_box'])->middleware('auth','can:isAdmin');
Route::post('/Admin-Mail-Box-Sent', [AdminController::class, 'MakeMail'])->name('MakeMail')->middleware('auth','can:isAdmin');




Route::get('/Add-Project-Images/{id}', [AdminController::class, 'new_project_images'])->middleware('auth','can:isAdmin');
Route::post('/Add-Images', [AdminController::class, 'adding_images'])->name('adding_images')->middleware('auth','can:isAdmin');


Route::get('/My-Tickets', [AdminController::class, 'show_tickets'])->middleware('auth','can:isAdmin');
Route::get('/New-Ticket', [AdminController::class, 'create_ticket'])->middleware('auth','can:isAdmin');
Route::post('/New-Ticket-Form', [AdminController::class, 'create_new_ticket'])->name('create_new_ticket')->middleware('auth','can:isAdmin');
Route::get('/Edit-Ticket/{id}', [AdminController::class, 'edit_ticket'])->middleware('auth','can:isAdmin');
Route::get('/Delete-Ticket/{id}', [AdminController::class, 'delete_ticket'])->middleware('auth','can:isAdmin');
Route::post('/Update-Ticket', [AdminController::class, 'update_ticket'])->name('update_ticket')->middleware('auth','can:isAdmin');



