<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Livewire\Client\Login as ClientLogin;
use App\Livewire\Client\Register as ClientRegister;
use App\Livewire\Client\Profile as ClientProfile;
use App\Livewire\Client\Finished as ClientFinished;

use App\Livewire\Admin\Index as AdminIndex;
use App\Models\client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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

// Route::view('/', 'welcome')->name('home');
Route::get('/', ClientLogin::class)->name('home');
Route::middleware('guest')->group(function () {
    Route::get('client/login', ClientLogin::class)->name('client.login');
    Route::get('client/register', ClientRegister::class)->name('client.register');
})->name('client');

Route::get('client/profile/{client}', ClientProfile::class)->name('client.profile');
Route::get('client/finished/{client?}', ClientFinished::class)->name('client.finished');

Route::get('admin', AdminIndex::class)->name('admin.index');

// Route::middleware('guest')->group(function () {
    // Route::get('login', Login::class)
    //     ->name('login');

    // Route::get('register', Register::class)
    //     ->name('register');
// });

// Route::get('password/reset', Email::class)
//     ->name('password.request');

// Route::get('password/reset/{token}', Reset::class)
//     ->name('password.reset');

// Route::middleware('auth')->group(function () {
//     Route::get('email/verify', Verify::class)
//         ->middleware('throttle:6,1')
//         ->name('verification.notice');

//     Route::get('password/confirm', Confirm::class)
//         ->name('password.confirm');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
//         ->middleware('signed')
//         ->name('verification.verify');

//     Route::post('logout', LogoutController::class)
//         ->name('logout');
// });


// Route::get('/notification', function () {
//     // $response = Password::broker()->sendResetLink(['email' => 'admin@admin.com']);
//     $mail = (new Illuminate\Notifications\Messages\MailMessage)
//                 ->mailer('smtp')
//                 ->subject('test')
//                 ->greeting('Hello!')
//                 ->line('One of your invoices has been paid!')
//                 ->lineIf(1 > 0, "Amount paid: 1")
//                 ->action('View Invoice', '#')
//                 ->line('Thank you for using our application!');
//     // dd($mail);
//     return $mail;
// });
