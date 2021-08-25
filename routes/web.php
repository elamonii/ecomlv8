<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;


// frontend Routes ========================================
Route::get('/',[HomeController::class,'index']);
Route::get('/cart',[CartController::class,'cartView']);
Route::get('/login',[LoginController::class,'loginView']);
Route::get('/products',[ProductsController::class,'productsList']);
// Route::get('/{category}/{producttitle}/{id}',[ProductsController::class,'productsDetails']);
Route::get('/wishlist',[WishlistController::class,'wishlistView']);
Route::get('/checkout',[CheckoutController::class,'checkoutView']);
Route::get('/account',[ProfileController::class,'accountView']);
Route::get('/contact-us',[HomeController::class,'contactUs']);


Route::name('admin.')->group(function () {
    Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('dashboard');
    
    // Category Route ========================================
    Route::get('/category/list',[CategoryController::class,'adminCategoryList'])->name('category-list');
    Route::get('/category/add',[CategoryController::class,'adminCategoryAdd'])->name('category-add');
    Route::get('/category/edit',[CategoryController::class,'adminCategoryEdit'])->name('category-edit');
    Route::get('/category/delete',[CategoryController::class,'adminCategoryDelete'])->name('category-delete');
    Route::get('/category/details',[CategoryController::class,'adminCategoryDetails'])->name('category-details');


    // Product Route =========================================
    Route::get('/product/list',[ProductsController::class,'adminProductList'])->name('product-list');
    Route::get('/product/add',[ProductsController::class,'adminProductAdd'])->name('product-add');
    Route::get('/product/edit/{id}',[ProductsController::class,'adminProductEdit'])->name('product-edit');
    Route::get('/product/details',[ProductsController::class,'adminProductDetails'])->name('product-details');
    Route::get('/product/delete',[ProductsController::class,'adminProductDelete'])->name('product-delete');



    // Order Route ===========================================
    Route::get('/order/list',[OrderController::class,'adminOrderList'])->name('order-list');
    

    // User Route ============================================  
    Route::get('/user/list',[UserController::class,'adminUserList'])->name('user-list');
    Route::get('/user/add',[UserController::class,'adminUserAdd'])->name('user-add');
    // Route::get('/user/edit/{id}',[UserController::class,'adminUserEdit']);
    Route::get('/user/edit',[UserController::class,'adminUserEdit'])->name('user-edit');
    Route::get('/user/delete',[UserController::class,'adminUserDelete'])->name('user-delete');
    Route::get('/user/details',[UserController::class,'adminUserDetails'])->name('user-details');
    Route::post('/user/save',[UserController::class,'adminUserSave'])->name('user-save');
    
    
    
    // Role Route ============================================
    Route::get('/role/list',[RoleController::class,'adminRoleList'])->name('role-list');
    Route::get('/role/add',[RoleController::class,'adminRoleAdd'])->name('role-add');
    Route::get('/role/edit/{id}',[RoleController::class,'adminRoleEdit'])->name('role-edit');
    Route::get('/role/delete/{id}',[RoleController::class,'adminRoleDelete'])->name('role-delete');
    Route::post('/role/save',[RoleController::class,'adminRoleSave'])->name('role-save');
    Route::post('/role/update',[RoleController::class,'adminRoleUpdate'])->name('role-update');


    // Permission Route ======================================
    Route::get('/permission/list',[PermissionController::class,'adminPermissionList'])->name('permission-list');
    Route::get('/permission/add',[PermissionController::class,'adminPermissionAdd'])->name('permission-add');
    Route::get('/permission/edit/{id}',[PermissionController::class,'adminPermissionEdit'])->name('permission-edit');
    Route::get('/permission/delete/{id}',[PermissionController::class,'adminPermissionDelete'])->name('permission-delete');
    Route::post('/permission/save',[PermissionController::class,'adminPermissionSave'])->name('permission-save');
    Route::post('/permission/update',[PermissionController::class,'adminPermissionUpdate'])->name('permission-update');

    // Role Management Route ==================================
    Route::get('/role_wise_permission/list',[UserController::class,'adminRoleWisePermission'])->name('role-wise-permissions');
    Route::get('/user-wise-role/list',[UserController::class,'adminUserWiseRole'])->name('user-wise-roles');

});

// Route::get('/admin/dashboard',[DashboardController::class,'index']);


// Route::get('/admin/user/details/{id}',[UserController::class,'adminUserDetails']);
