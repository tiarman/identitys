<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PickupPointController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WareHouseController;
use App\Models\Coupon;
use App\Models\Identity;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\PDF;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;


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

// Route::get('/', function () {
//     return view('site.index');
// })->name('home');



Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/shop', function () {
    return view('site.shop');
})->name('shop');

// public access route clearence file
Route::get('/bmet-clearance/{id}', [IdentityController::class, 'manage2'])->middleware('role_or_permission:Super Admin|Manage User')->name('manage2');



Route::get('/quick_view/{id}', [SiteController::class, 'productQuickView'])->name('quick_view');
Route::get('/product_details/{name}', [SiteController::class, 'product_details'])->name('product_details');
Route::get('/product/{productId}/file/{id}/delete', [ProductController::class, 'productFileDelete'])->name('product.file.delete');

Route::get('/quickview/{id}', [SiteController::class, 'quickview']);



Route::get('/pdf', [EmployeeController::class, 'showEmployees'])->name('pdfcreate');
Route::get('/employee/pdf', [EmployeeController::class, 'createPDF']);
Route::get('/employee/pdfs', [IdentityController::class, 'createPDF'])->name('pdfss');


Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');


// Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/logout', [SiteController::class, 'logout'])->middleware('auth')->name('logout');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [SiteController::class, 'profile'])->name('profile');

    # Ajax
    Route::prefix('ajax')->name('ajax.')->group(function () {
        Route::post('/permission-by-role', [PermissionController::class, 'getPermissionByRole'])->middleware('role_or_permission:Super Admin|Manage Permission')->name('get.permission.by.role');
        Route::post('/update/user/status', [UserController::class, 'ajaxUpdateStatus'])->middleware('role_or_permission:Super Admin|Manage User')->name('update.user.status');
        Route::post('/update/identity/status', [IdentityController::class, 'ajaxUpdateStatus'])->middleware('role_or_permission:Super Admin|Manage User')->name('update.identity.status');
       
    });


    #Users
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/create', [UserController::class, 'create'])->middleware('role_or_permission:Super Admin|Create User')->name('create');
        Route::post('/store', [UserController::class, 'store'])->middleware('role_or_permission:Super Admin|Create User|Manage User')->name('store');
        Route::get('/manage/{id}', [UserController::class, 'manage'])->middleware('role_or_permission:Super Admin|Manage User')->name('manage');
        Route::get('/{id}/view', [UserController::class, 'view'])->middleware('role_or_permission:Super Admin|View User')->name('view');
        Route::delete('/destroy', [UserController::class, 'destroy'])->middleware('role_or_permission:Super Admin|Delete User')->name('destroy');
        Route::get('/list', [UserController::class, 'index'])->middleware('role_or_permission:Super Admin|List Of User')->name('list');
    });

    #Roles
    Route::prefix('role')->name('role.')->group(function () {
        Route::get('/create', [RoleController::class, 'create'])->middleware('role_or_permission:Super Admin|Create Role')->name('create');
        Route::post('/store', [RoleController::class, 'store'])->middleware('role_or_permission:Super Admin|Create Role|Manage Role')->name('store');
        Route::get('/manage/{id}', [RoleController::class, 'manage'])->middleware('role_or_permission:Super Admin|Manage Role')->name('manage');
        Route::get('/{id}/view', [RoleController::class, 'view'])->middleware('role_or_permission:Super Admin|View Role')->name('view');
        Route::delete('/destroy', [RoleController::class, 'destroy'])->middleware('role_or_permission:Super Admin|Delete Role')->name('destroy');
        Route::get('/list', [RoleController::class, 'index'])->middleware('role_or_permission:Super Admin|List Of Role')->name('list');
    });

    #Permission
    Route::match(['get', 'post'], '/permission/manage', [PermissionController::class, 'managePermission'])->middleware('role_or_permission:Super Admin|Manage Permission')->name('permission.manage');


    #Brand
    Route::prefix('identity')->name('identity.')->group(function () {
        Route::get('/create', [IdentityController::class, 'create'])->middleware('role_or_permission:Super Admin|Create User')->name('create');
        Route::post('/store', [IdentityController::class, 'store'])->middleware('role_or_permission:Super Admin|Create User|Manage User')->name('store');
        Route::get('/manage/{id}', [IdentityController::class, 'manage'])->middleware('role_or_permission:Super Admin|Manage User')->name('manage');
        Route::get('/view/{id}', [IdentityController::class, 'view'])->middleware('role_or_permission:Super Admin|Manage User')->name('view');
        // Route::get('/{id}/view', [IdentityController::class, 'view'])->middleware('role_or_permission:Super Admin|View User')->name('view');
        Route::delete('/destroy', [IdentityController::class, 'destroy'])->middleware('role_or_permission:Super Admin|Delete User')->name('destroy');
        Route::get('/list', [IdentityController::class, 'index'])->middleware('role_or_permission:Super Admin|List Of User')->name('list');
    });








});
