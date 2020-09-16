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
Route::get('/', "PagesController@index");
Route::get('/iframe', "PagesController@iframe");

Route::get('/login','PagesController@login');

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login')->name('login');

Route::get('/register', 'PagesController@register');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/faq', 'PagesController@faq');

Route::get('/history','PagesController@history');

Route::post('/password/reset', 'PasswordResetController@sendResetLink');
Route::post('/reset', 'PasswordResetController@Reset');
Route::get('/reset', 'PasswordResetController@showResetForm');
Route::get('/password/reset', 'PagesController@passwordReset');

Route::get('/terms&conditions', 'PagesController@terms_and_conditions');

Route::get('/news', 'PagesController@news');

Route::get('/ref_link', function(){
    return view('ref_link');
});

Route::get('/ref_link', function(){
    return view('ref_link');
});

Route::middleware('auth')->prefix('/user')->group(function(){
    Route::get('/user_dashboard', 'UserController@Dashboard');
     Route::post('/logout', [AuthController::class,'logout']);
    // withdrawal
    Route::post('/withdraw', 'UserController@withdraw');
    Route::get('/withdraw', 'UserController@viewWithdraw');

    // investment
    Route::post('/save_deposit', 'UserController@invest');       
    Route::get('/complete', 'PagesController@deposit_save');
    Route::post('/invest', 'UserController@pay');
    Route::get('/deposit', 'UserController@viewInvestment');

    // profile update
    Route::get('/edit', 'UserController@show');
    Route::patch('/', 'UserController@update');

    Route::get('/referral', function(){
        return view('referral');
    });
    Route::get('/ref_links', function(){
        return view('ref_link');
    });

    Route::get('/withdrawal', function(){
        return view('withdrawal');
    });
});

// admin
Route::post('/update/user', 'AdminController@investment');
Route::get('/admin', 'AdminController@superView');
Route::patch('/update/{investment}', 'AdminController@update');
Route::patch('/withdraw/{withdraw}', 'AdminController@updateWithdraw');
Route::post('/sendMail','AdminController@mail');
Route::post('/contact','AdminController@mail');
Route::delete('/delete/{user}', 'AdminController@destroy');


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
