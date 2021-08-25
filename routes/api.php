<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\packagesController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\FacebookSocialiteController;
use App\Http\Middleware\API\Super_Admin;
use App\Http\Controllers\API\ChatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});







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

Route::get('/users1',[App\Http\Controllers\API\SuperAdminController::class,'Users']);
Route::get('/users-role/{id}',[App\Http\Controllers\API\SuperAdminController::class,'users_role'])->name('users-role');
Route::get('/users-status/{id}',[App\Http\Controllers\API\SuperAdminController::class,'users_status'])->name('users-status');

    });




Route::get('/registerForm',[App\Http\Controllers\API\AuthController::class,'registerForm'])->name('registerForm');
Route::post('/register',[App\Http\Controllers\API\AuthController::class,'register'])->name('register');
Route::get('/loginForm',[App\Http\Controllers\API\AuthController::class,'loginForm'])->name('loginForm');
Route::post('/login',[App\Http\Controllers\API\AuthController::class,'login'])->name('login');



Route::group(['middleware'=>['Admin']],function(){
        Route::get('/admin',[App\Http\Controllers\API\AdminController::class,'dashboard']);
        Route::get('/users',[App\Http\Controllers\API\AdminController::class,'users']);
        Route::get('/ads',[App\Http\Controllers\API\AdminController::class,'ads']);
        Route::get('/categorie',[App\Http\Controllers\API\AdminController::class,'categories']);
        Route::get('/sub_categorie',[App\Http\Controllers\API\AdminController::class,'sub_categories']);
        Route::get('/featured',[App\Http\Controllers\API\AdminController::class,'featured']);
        Route::get('/deleteCat/{id}',[App\Http\Controllers\API\AdminController::class,'deleteCat']);
        Route::post('/update_cat/{id}',[App\Http\Controllers\API\AdminController::class,'update_cat']);
});

Route::view('/chat','chat');








Route::get('/categories', 'App\Http\Controllers\API\CategoryController@index');
Route::get('/', 'App\Http\Controllers\API\IndexController@index');

Route::get('/add_post','App\Http\Controllers\API\PostController@add_post');
Route::get('/add_item/{id}','App\Http\Controllers\API\PostController@add_item');
Route::post('/post','App\Http\Controllers\API\PostController@post');

Route::get('/login/google','App\Http\Controllers\API\LoginController@redirectToProvider');
Route::get('login/google/callback','App\Http\Controllers\API\LoginController@handleProviderCallback');

Route::get('/auth/facebook', [App\Http\Controllers\API\FacebookSocialiteController::class, 'redirectToFB']);
Route::get('callback/facebook', [App\Http\Controllers\API\FacebookSocialiteController::class, 'handleCallback']);

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

Route::get('/subcat_pro/{id}','App\Http\Controllers\API\IndexController@subcat_pro');
Route::get('/cat_pro/{id}','App\Http\Controllers\API\IndexController@cat_pro');

Route::get('/detail/{id}','App\Http\Controllers\API\IndexController@detail')->name('detail');

Route::get('/search_post','App\Http\Controllers\API\IndexController@search_post');
Route::get('/search_city','App\Http\Controllers\API\IndexController@search_city');

Route::get('my-ads/{id}','App\Http\Controllers\API\MyAdsController@index')->name('my-ads');
Route::get('delete_ad/{id}','App\Http\Controllers\API\MyAdsController@delete_ad')->name('delete_ad');
Route::get('edit_ad/{id}','App\Http\Controllers\API\MyAdsController@edit_ad')->name('edit_ad');
Route::get('/status/{id}','App\Http\Controllers\API\MyAdsController@status_update')->name('status');
Route::post('/update_ad/{id}','App\Http\Controllers\API\MyAdsController@update_ad');

Route::get('/sell_fast/{id}','App\Http\Controllers\API\packagesController@sell_fast')->name('sell_fast');
Route::post('/payment_methods', [App\Http\Controllers\API\PaymentController::class, 'index'])->name('payment_methods');

// Stripe Payment method
Route::post('/striper', [App\Http\Controllers\API\PaymentController::class, 'stripe']);
Route::post('stripe', [App\Http\Controllers\API\PaymentController::class, 'stripePost'])->name('stripe.post');

Route::get('/like','App\Http\Controllers\API\IndexController@like');
Route::get('/dislike','App\Http\Controllers\API\IndexController@dislike');

Route::get('/favorites_ads','App\Http\Controllers\API\FavoritesAdsController@favorites_ads');
Route::get('/dislike_favorite','App\Http\Controllers\API\IndexController@dislike');

Route::get('/load/{id}',[App\Http\Controllers\API\ChatController::class, 'load']);
Route::get('/chat/{id}',[App\Http\Controllers\API\ChatController::class, 'index']);
Route::post('/chat-send',[App\Http\Controllers\API\ChatController::class, 'send'])->name('chat-send');

Route::get('/messangerload/{id}',[App\Http\Controllers\API\ChatController::class, 'messangerload']);
Route::get('/messanger/{id}',[App\Http\Controllers\API\ChatController::class, 'messanger']);

Route::get('/allads-filter',[App\Http\Controllers\API\IndexController::class,'allads_filter'])->name('allads-filter');
Route::get('/featured-filter',[App\Http\Controllers\API\IndexController::class,'featured_filter'])->name('featured-filter');
Route::get('/lowprice-filter',[App\Http\Controllers\API\IndexController::class,'lowprice_filter'])->name('lowprice-filter');
Route::get('/highprice-filter',[App\Http\Controllers\API\IndexController::class,'highprice_filter'])->name('highprice-filter');
// Route::get('/chat/{id}', function() {
//     return View::make('chatload');
// })->name('chat');
Route::get('business',[App\Http\Controllers\API\IndexController::class,'business'])->name('business');
Route::post('/business-process',[App\Http\Controllers\API\IndexController::class,'business_process'])->name('business-process');




Route::get('/mobreg', function () {
    return view('auth.register');
})->name('register1');

Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/moblogin', [App\Http\Controllers\API\AuthController::class,'moblogin'])->name('moblogin');
Route::post('/mobloginpro', [App\Http\Controllers\API\AuthController::class,'mobloginpro'])->name('mobloginpro');


Route::post('/mobreg_pro', [App\Http\Controllers\API\AuthController::class,'create'])->name('register2');
Route::post('/verify', 'App\Http\Controllers\API\AuthController@verify')->name('verify');






