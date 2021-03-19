<?php


use App\Mail\NewUserWelcomeMail;
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

Route::get('/', function () {
    return view('index');
});


Auth::routes();

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
// Route::post('/save', 'profileController@save');
// Route::post('/pay', 'RaveController@initialize')->name('pay');
// Route::post('/rave/callback', 'RaveController@callback')->name('callback');

Route::post('/register-user', 'profileController@register')->name('register.user');

Route::get('/dashboard', 'profileController@dashboard')->name('dashboard');
Route::get('/investments', 'profileController@profile')->name('investments');
Route::get('/premium-plan', 'profileController@premium')->name('premium');
Route::get('/customer-care', 'profileController@message')->name('care');
Route::post('/contact-us', 'profileController@store')->name('contact.store');
Route::get('/mypay', 'profileController@mypay')->name('contact.mypay');
Route::get('/edit-user', 'profileController@edit')->name('edit.user');
Route::post('/update-user', 'profileController@update')->name('update.user');
Route::get('/invest-gold', 'profileController@gold')->name('invest.gold');
Route::patch('/make-payment', 'profileController@pay')->name('make.payment');
Route::get('/logout', 'profileController@logout')->name('logout');

//Route::get('/home', 'HomeController@home')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
//Route::get('/register', 'HomeController@register')->name('register');
//Route::post('/register-user', 'HomeController@create')->name('register.user');

Route::middleware('auth', 'isAdmin')->group(function () {

    Route::get('admin/users', "Admin\UsersController@index")->name('admin.users');
    Route::get('admin/user/{id}', "Admin\UsersController@getUser")->name('admin.user');
    Route::get('admin/dashboard', "Admin\UsersController@dashboard")->name('admin.dashboard');
    Route::get('admin/premium', "Admin\UsersController@premium")->name('admin.premium');
    Route::patch('admin/update/store', "Admin\UsersController@getPremium")->name('admin.update.store');
    Route::post('admin/users/store', "Admin\UsersController@store")->name('admin.users.store');
    Route::post('admin/premium/add', "Admin\UsersController@add")->name('admin.premium.add');
});
