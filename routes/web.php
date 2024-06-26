<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\OrganizerSubController;
use App\Http\Controllers\ManageEventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin;
use App\Http\Controllers\ReservationController;


use App\Models\Event;
use App\Models\Reservation;

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
    return view('landing-page');
});

/* main route */
Route::get('/home', [MainController::class, 'index'])->name('main')->middleware('auth');

/* auth route */
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');

Route::post('/register', [AuthController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::delete('/user/delete', [AuthController::class, 'destroy'])->name('user.delete');

/* forget-password route */
Route::get('/forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');

Route::post('/forget-password', [ForgetPasswordController::class, 'forgetPasswordPost'])->name('forget.password.post');

Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');

Route::post('/reset-password', [ForgetPasswordController::class, 'resetPasswordPost'])->name('reset.password.post');

/* subscribe route */
Route::post('/subscribe/store', [OrganizerSubController::class, 'subscribe'])->name('subscribe.store');

Route::get('/subscribe', function () {
    $black_hover = 'Be an organizer';
    return view('subscribe', compact('black_hover'));

})->name('subscribe');

/* unsubscribe route */
Route::post('/unsubscribe', [OrganizerSubController::class, 'unsubscribe'])->name('unsubscribe');

Route::get('/statistiques', [admin::class, 'index']);

/* manage event route */
Route::get('/manageEvents', function () {
    $black_hover = 'Manage events';
    $reservers = Reservation::where('pending', '1')->get();
    return view('event.manage-events', compact('black_hover', 'reservers'));

})->name('manage-events');

/* manage categories */
Route::get('/manage-categories', function () {
    $black_hover = 'Manage categories';
    return view('manage-categories', compact('black_hover'));

})->name('manage-categories');

/* event details */
Route::get('/event-details/{event}', function (Event $event) {
    $black_hover = 'Home';
    return view('event.event-details', compact('event', 'black_hover'));

})->name('event-details');

/* accept events */
Route::get('/accept-events', function () {
    $black_hover = 'Accept Events';
    return view('admin.accept-events', compact('black_hover'));

})->name('accept-events');

/* manage users */
Route::get('/manage-users', function () {
    $black_hover = 'Manage users';

    return view('admin.manage-users', compact('black_hover'));
})->name('manage-users');

/* Profile Route */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::put('/profile/userInfo', [ProfileController::class, 'userInfoUpdate'])->name('profile.userInfo.update');

    Route::put('/profile/password', [ProfileController::class, 'passwordUpdate'])->name('profile.password.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Trend Route:
    Route::get('/Trend', [TrendController::class, 'index'])->name('news.trend');
});

/* back route */
Route::get('/back-home', function () {
    return redirect()->route('main');
})->name('back');


/* my-reserved-events route */
Route::get('/my-reserved-events', function () {
    $black_hover = 'Home';
    return view('event.my-reserved-events', compact('black_hover'));
})->name('my-reserved-events');

/* category-events */
Route::get('/category-events/{category}', [MainController::class, 'category_events'])->name('category-events');



Route::get('/reservation', [ReservationController::class, 'index']);
