<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\CategoriesController;
use App\Http\Controllers\frontend\CategoriesShowController;

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

// Route::get('/',[App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/',[App\Http\Controllers\indexController::class, 'index'])->name('index');
Route::get('/about-us',[App\Http\Controllers\indexController::class, 'about'])->name('about');
Route::get('/gallery',[App\Http\Controllers\indexController::class, 'gallery'])->name('gallery');
Route::get('/schedules',[App\Http\Controllers\indexController::class, 'schedules'])->name('schedules');
Route::get('/event/{id}',[EventController::class,'viewEvent'])->name('viewEvent');

//admin controlling



Route::get('/categories',[CategoriesShowController::class,'all_category'])->name('show_cat_all');
Route::get('/single/category/{id}',[CategoriesShowController::class,'single_cat_page'])->name('single_cat_page');


//backend start

Auth::routes();

// User Controlling

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>['auth']],function(){
    Route::get('/home/profile',[UserController::class,'profile'])->name('profile');
    Route::post('/home/update',[UserController::class,'updateDetails'])->name('updateDetails');
    Route::get('/home/check_pwd',[UserController::class,'chkPassword'])->name('chkPassword');
    Route::match(['get','post'],'/update-pwd',[UserController::class,'updatePassword'])->name('updatePassword');
    Route::get('home/booking', [UserController::class,'booking'])->name('booking');
    Route::get('home/booking/details/{id}', [UserController::class,'details'])->name('details');
});

Route::prefix('admin')->group(function(){
    Route::middleware(['guest:admin'])->group(function () {
        Route::view('/login', 'admin.login')->name('admin.login');
        Route::post('login', [AdminController::class,'store'])->name('admin.login');
    });
    
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard',[AdminController::class, 'index'])->name('admin.home');
        Route::get('/logout',[AdminController::class, 'destroy'])->name('admin.logout');
        //category controller
        Route::get('/categories',[CategoriesController::class,'allCategory'])->name('allCategory');
        Route::get('/add-category',[CategoriesController::class,'addCategoryForm'])->name('addCategoryForm');
        Route::post('/add-category',[CategoriesController::class,'storeCategory'])->name('storeCategory');
        Route::get('/delete-category/{id}',[CategoriesController::class,'deleteCategory'])->name('deleteCategory');
        Route::get('/edit-category/{id}',[CategoriesController::class,'editCategory'])->name('editCategory');
        Route::post('/update-category/{id}',[CategoriesController::class,'updateCategory'])->name('updateCategory');
        
        //Event Routing
        Route::get('/event-all',[EventController::class,'allEvent'])->name('allEvent');
        Route::get('/event-form',[EventController::class,'addeventForm'])->name('addEventForm');

        Route::post('/add-event',[EventController::class,'storeEvent'])->name('storeEvent');
        Route::get('/delete-event/{id}',[EventController::class,'deleteEvent'])->name('eventDelete');
        Route::get('/edit-event/{id}',[EventController::class,'eventEdit'])->name('eventEdit');
        Route::post('/update-event/{id}',[EventController::class,'eventUpdate'])->name('eventUpdate');
        // Banner Controlling
        Route::match(['get','post'],'add+&&+slider',[App\Http\Controllers\SliderController::class, 'addSlider'])->name('addslider');
        Route::match(['get','post'],'edit-slider/{id}',[App\Http\Controllers\SliderController::class, 'editSlider'])->name('editslider');
        Route::get('/view-slider',[App\Http\Controllers\SliderController::class, 'viewSlider'])->name('viewslider');
        Route::match(['get','post'],'delete-slider/{id}',[App\Http\Controllers\SliderController::class, 'deleteSlider'])->name('deleteSlider');

        // User Controll
        Route::get('/users',[UserController::class,'allUser'])->name('admin.users');

        //order controlling
        Route::get('/orders',[AdminController::class,'orders'])->name('admin.orders');
        Route::get('/orders/status/{id}/{status}',[AdminController::class,'status'])->name('admin.status');
        Route::get('/orders/details/{id}',[AdminController::class, 'orderDetails'])->name('admin.details');


       
    });
});

//  Route::get('/dashboard',[AdminController::class, 'index'])->name('admin.home');
// Route::get('/admin/login',[AdminController::class, 'loginForm'])->name('admin.login');
// Route::post('/login-save',[AdminController::class, 'submit_login'])->name('admin.loginSave');
// Route::get('/login/logout',[AdminController::class, 'logout'])->name('admin.logout');

//Category Controller
// Route::get('/category-all',[CategoriesController::class,'allCategory'])->name('allCategory');
// Route::get('/category-form',[CategoriesController::class,'addCategoryForm'])->name('addCategoryForm');

// Route::post('/add-category',[CategoriesController::class,'storeCategory'])->name('storeCategory');
// Route::get('/delete-category/{id}',[CategoriesController::class,'deleteCategory'])->name('deleteCategory');
// Route::get('/edit-category/{id}',[CategoriesController::class,'editCategory'])->name('editCategory');
// Route::post('/update-category/{id}',[CategoriesController::class,'updateCategory'])->name('updateCategory');





//Event Booking
Route::match(['get','post'],'/cart/{id}',[EventController::class,'cart'])->name('cart');
Route::match(['get','post'],'cart',[EventController::class,'viewCart'])->name('viewCart');
Route::match(['get','post'],'cart/increment/{rowId}',[EventController::class,'incrementQty'])->name('incrementQty');
Route::match(['get','post'],'cart/decrement/{rowId}',[EventController::class,'minusQty'])->name('minusQty');
Route::match(['get','post'],'cart/delete/{rowId}',[EventController::class,'deleteCart'])->name('deleteCart');
Route::match(['get','post'],'checkout',[EventController::class,'checkout'])->name('checkout');
Route::match(['get','post'],'pay',[EventController::class,'pay'])->name('pay');

