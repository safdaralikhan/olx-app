<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\packagesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FacebookSocialiteController;
use App\Http\Middleware\Super_Admin;
use App\Http\Controllers\ChatController;


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



Route::group(['middleware'=>['Super_Admin']],function(){

Route::get('/users1',[App\Http\Controllers\SuperAdminController::class,'Users']);
Route::get('/users-role/{id}',[App\Http\Controllers\SuperAdminController::class,'users_role'])->name('users-role');
Route::get('/users-status/{id}',[App\Http\Controllers\SuperAdminController::class,'users_status'])->name('users-status');

    });




Route::get('/registerForm',[App\Http\Controllers\AuthController::class,'registerForm'])->name('registerForm');
Route::post('/register',[App\Http\Controllers\AuthController::class,'register'])->name('register');
Route::get('/loginForm',[App\Http\Controllers\AuthController::class,'loginForm'])->name('loginForm');
Route::post('/login',[App\Http\Controllers\AuthController::class,'login'])->name('login');



Route::group(['middleware'=>['Admin']],function(){
        Route::get('/admin',[App\Http\Controllers\AdminController::class,'dashboard']);
        Route::get('/users',[App\Http\Controllers\AdminController::class,'users']);
        Route::get('/ads',[App\Http\Controllers\AdminController::class,'ads']);
        Route::get('/categorie',[App\Http\Controllers\AdminController::class,'categories']);
        Route::get('/sub_categorie',[App\Http\Controllers\AdminController::class,'sub_categories']);
        Route::get('/featured',[App\Http\Controllers\AdminController::class,'featured']);
        Route::get('/deleteCat/{id}',[App\Http\Controllers\AdminController::class,'deleteCat']);
        Route::post('/update_cat/{id}',[App\Http\Controllers\AdminController::class,'update_cat']);
});

Route::view('/chat','chat');








Route::get('categories', 'App\Http\Controllers\CategoryController@index');
Route::get('/', 'App\Http\Controllers\IndexController@index');

Route::get('/add_post','App\Http\Controllers\PostController@add_post');
Route::get('/add_item/{id}','App\Http\Controllers\PostController@add_item');
Route::post('/post','App\Http\Controllers\PostController@post');

Route::get('/login/google','App\Http\Controllers\LoginController@redirectToProvider');
Route::get('login/google/callback','App\Http\Controllers\LoginController@handleProviderCallback');

Route::get('/auth/facebook', [FacebookSocialiteController::class, 'redirectToFB']);
Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);

Route::get('/logout',function()
{
    session()->forget('user');
    session()->forget('id');
    session()->forget('user_img');
    session()->forget('role');
    session()->forget('user_imgE');
    session()->forget('modal');
    Auth::logout();
    return redirect('/');
});

Route::get('/subcat_pro/{id}','App\Http\Controllers\IndexController@subcat_pro');
Route::get('/cat_pro/{id}','App\Http\Controllers\IndexController@cat_pro');

Route::get('/detail/{id}','App\Http\Controllers\IndexController@detail')->name('detail');

Route::get('/search_post','App\Http\Controllers\IndexController@search_post');
Route::get('/search_city','App\Http\Controllers\IndexController@search_city');

Route::get('my-ads/{id}','App\Http\Controllers\MyAdsController@index')->name('my-ads');
Route::get('delete_ad/{id}','App\Http\Controllers\MyAdsController@delete_ad')->name('delete_ad');
Route::get('edit_ad/{id}','App\Http\Controllers\MyAdsController@edit_ad')->name('edit_ad');
Route::get('/status/{id}','App\Http\Controllers\MyAdsController@status_update')->name('status');
Route::post('/update_ad/{id}','App\Http\Controllers\MyAdsController@update_ad');

Route::get('/sell_fast/{id}','App\Http\Controllers\packagesController@sell_fast')->name('sell_fast');
Route::post('/payment_methods', [PaymentController::class, 'index'])->name('payment_methods');

// Stripe Payment method
Route::post('/striper', [PaymentController::class, 'stripe']);
Route::post('stripe', [PaymentController::class, 'stripePost'])->name('stripe.post');

Route::get('/like','App\Http\Controllers\IndexController@like');
Route::get('/dislike','App\Http\Controllers\IndexController@dislike');

Route::get('/favorites_ads','App\Http\Controllers\FavoritesAdsController@favorites_ads');
Route::get('/dislike_favorite','App\Http\Controllers\IndexController@dislike');

Route::get('/load/{id}',[ChatController::class, 'load']);
Route::get('/chat/{id}',[ChatController::class, 'index']);
Route::post('/chat-send',[ChatController::class, 'send'])->name('chat-send');

Route::get('/messangerload/{id}',[ChatController::class, 'messangerload']);
Route::get('/messanger/{id}',[ChatController::class, 'messanger']);

Route::get('/allads-filter',[App\Http\Controllers\IndexController::class,'allads_filter'])->name('allads-filter');
Route::get('/featured-filter',[App\Http\Controllers\IndexController::class,'featured_filter'])->name('featured-filter');
Route::get('/lowprice-filter',[App\Http\Controllers\IndexController::class,'lowprice_filter'])->name('lowprice-filter');
Route::get('/highprice-filter',[App\Http\Controllers\IndexController::class,'highprice_filter'])->name('highprice-filter');
// Route::get('/chat/{id}', function() {
//     return View::make('chatload');
// })->name('chat');
Route::get('business',[App\Http\Controllers\IndexController::class,'business'])->name('business');
Route::post('/business-process',[App\Http\Controllers\IndexController::class,'business_process'])->name('business-process');




Route::get('/mobreg', function () {
    return view('auth.register');
})->name('register1');

Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/moblogin', [App\Http\Controllers\AuthController::class,'moblogin'])->name('moblogin');
Route::post('/mobloginpro', [App\Http\Controllers\AuthController::class,'mobloginpro'])->name('mobloginpro');


Route::post('/mobreg_pro', [App\Http\Controllers\AuthController::class,'create'])->name('register2');
Route::post('/verify', 'App\Http\Controllers\AuthController@verify')->name('verify');

Route::get('/user-profile/{id}',[App\Http\Controllers\ProfileController::class,'user_profile']);
Route::post('/change_pass',[App\Http\Controllers\ProfileController::class,'change_password']);
Route::post('/update_profile',[App\Http\Controllers\ProfileController::class,'update_profile']);




