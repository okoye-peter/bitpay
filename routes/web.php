<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

// Route::get('/',[GuestController::class,'index']);

// new routes
Route::get('/', "PagesController@index")->name('home');
Route::get('/home', "PagesController@index");

Route::get('/login','PagesController@login')->name('login');

Route::post('/register', 'AuthController@register')->name('registration');
Route::post('/login', 'AuthController@login')->name('authenticate');


Route::get('/register', 'PagesController@register')->name('register');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/partners', 'PagesController@partners')->name('partners');

Route::get('/faq', 'PagesController@faq')->name('faq');

Route::get('/investors','PagesController@investors')->name('investors');
Route::get('/rules','PagesController@rules')->name('rules');
Route::get('/support','PagesController@support')->name('support');

Route::post('/password/reset', 'PasswordResetController@sendResetLink')->name('send.link');
Route::post('/reset', 'PasswordResetController@Reset');
Route::get('/reset', 'PasswordResetController@showResetForm');
Route::get('/password/reset', 'PagesController@passwordReset')->name('password.reset');


Route::middleware('auth')->prefix('/user')->group(function(){
    Route::get('/user_dashboard', 'UserController@Dashboard')->name('dashboard');
    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
    // withdrawal
    Route::post('/withdraw', 'UserController@withdraw');
    Route::get('/withdraw', 'UserController@viewWithdraw')->name('withdraw');

    // investment
    Route::get('/deposit', 'UserController@activeDeposit')->name('active.deposit');
    Route::get('/complete', 'PagesController@deposit_save');
    Route::post('/invest', 'UserController@pay');

    // history
    Route::get('/history', 'UserController@history')->name('history');

    // profile update
    Route::get('/edit', 'UserController@show')->name('profile');
    Route::patch('/', 'UserController@update')->name('update');

    Route::get('/referral', function(){
        return view('referral');
    });

    Route::get('/ref_links', function(){
        return view('ref_link');
    });
});

// admin
Route::prefix('/admin')->group(function(){
    Route::post('/login', 'AuthController@adminLogin')->name('admin.authenticate');
    Route::get('login', 'AdminController@login')->name('admin.login');
    
    Route::middleware(['auth', 'isadmin'])->group(function (){
        Route::post('/update/user', 'AdminController@investment');
        Route::get('/form', 'AdminController@showForm')->name('admin.form');
        Route::get('/dashboard', 'AdminController@superView')->name('admin.dashboard');
        Route::patch('/update/{investment}', 'AdminController@update')->name('admin.confirm.investment');
        Route::patch('/withdraw/{withdraw}', 'AdminController@updateWithdraw')->name('admin.confirm.withdrawal');
        Route::get('/sendMail', 'AdminController@showMailForm')->name('admin.email');
        Route::post('/sendMail', 'AdminController@mail')->name('admin.send.mail');
        // Route::post('/contact', 'AdminController@mail');
        Route::post('/company_bonus', 'AdminController@updateCompanyBonus')->name('update.company.bonus');
        Route::delete('/delete/{user}', 'AdminController@destroy');
    });
    
});


// Route::post('/register', [AuthController::class,'register']);
// Route::post('/login', [AuthController::class,'login'])->name('login');
// Route::get('/logout', [AuthController::class,'logout']);

// Route::get('/about', [GuestController::class,'viewAbout']);
// Route::get('/register', [GuestController::class,'viewRegister']);

// Route::get('/terms&condition',[GuestController::class,'viewTerms']);
// Route::get('/login', [GuestController::class,'viewLogin']);

//                 /**Users*/
// Route::get('/dashboard', [UserController::class,'dashboard']);
// Route::get('/invest', [UserController::class,'viewInvestment']);
// Route::post('/invest', [UserController::class,'invest']);
// Route::get('/investboard',[UserController::class,'viewInvestboard']);

// Route::get('/withdraw', [UserController::class,'viewWithdraw']);
// Route::post('/withdraw',[UserController::class,'withdraw']);

// /** Admin**/
// Route::get('/super',[AdminController::class,'superView']);
// Route::post('/clientInvest',[AdminController::class,'investment']);
// Route::post('/sendMail',[AdminController::class,'mail']);
// Route::patch('/update/{investment}-{email}',[AdminController::class,'update']);
// Route::patch('/withdraw/{withdraw}-{clientID}', [AdminController::class,'updateWithdraw']);
// Route::delete('/user/{user}-{email}', [AdminController::class, 'destroy']);

// /**Sub Admin*/
// Route::get('/subAdmin',[AdminController::class,'subAdmin']);
