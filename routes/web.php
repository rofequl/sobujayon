<?php

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/login-admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::post('/login-admin', 'Auth\LoginController@adminLogin')->name('login.admin');
Route::get('/register-admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::post('/register-admin', 'Auth\RegisterController@createAdmin')->name('register.admin');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin.index')->name('admin');

    Route::get('admin-category', 'CategoryController@AdminCategory')->name('AdminCategory');
    Route::post('admin-category-add', 'CategoryController@AdminCategoryAdd')->name('AdminCategoryAdd');
    Route::get('admin-category-list', 'CategoryController@AdminCategoryList')->name('AdminCategoryList');
    Route::get('admin-category-delete', 'CategoryController@AdminCategoryDelete')->name('AdminCategoryDelete');

    Route::get('admin-subcategory', 'CategoryController@AdminSubcategory')->name('AdminSubcategory');
    Route::post('admin-subcategory-add', 'CategoryController@AdminSubcategoryAdd')->name('AdminSubcategoryAdd');
    Route::get('admin-subcategory-list', 'CategoryController@AdminSubcategoryList')->name('AdminSubcategoryList');
    Route::get('admin-subcategory-delete', 'CategoryController@AdminSubcategoryDelete')->name('AdminSubcategoryDelete');

    Route::get('admin-brand', 'CategoryController@AdminBrand')->name('AdminBrand');
    Route::post('admin-brand-add', 'CategoryController@AdminBrandAdd')->name('AdminBrandAdd');
    Route::get('admin-brand-list', 'CategoryController@AdminBrandList')->name('AdminBrandList');
    Route::get('admin-brand-status', 'CategoryController@AdminBrandStatus')->name('AdminBrandStatus');
    Route::get('admin-tag-delete', 'CategoryController@AdminTagDelete')->name('AdminTagDelete');

    Route::get('admin-unapproved-product', 'ProductController@AdminUnapprovedProduct')->name('AdminUnapprovedProduct');
    Route::get('admin-approved-product', 'ProductController@AdminApprovedProduct')->name('AdminApprovedProduct');
    Route::get('admin-product-status', 'ProductController@AdminProductStatus')->name('AdminProductStatus');
    Route::get('admin-unapproved-product-single/{data}', 'ProductController@AdminUnapprovedProductSingle')->name('AdminUnapprovedProductSingle');

    Route::get('admin-nursery', 'NurseryController@AdminNursery')->name('AdminNursery');
    Route::get('admin-nursery-list', 'NurseryController@AdminNurseryList')->name('AdminNurseryList');
    Route::get('admin-nursery-list-delete', 'NurseryController@AdminNurseryListDelete')->name('AdminNurseryListDelete');

});

Route::get('/login-nursery', 'Auth\LoginController@showNurseryLoginForm')->name('login.nursery');
Route::post('/login-nursery', 'Auth\LoginController@nurseryLogin')->name('login.nursery');

Route::get('/register-nursery', 'Auth\RegisterController@showNurseryForm')->name('register.nursery');
Route::post('/register-nursery', 'Auth\RegisterController@createNursery')->name('register.nursery');

Route::post('select-subcategory', 'NurseryController@SelectSubcategory')->name('SelectSubcategory');

Route::group(['middleware' => 'auth:nursery'], function () {

    Route::view('nursery', 'nursery.index')->name('nursery');

    Route::get('nursery-product', 'NurseryController@NurseryProduct')->name('NurseryProduct');
    Route::get('nursery-product-list', 'NurseryController@NurseryProductList')->name('NurseryProductList');
    Route::post('nursery-product-add', 'NurseryController@NurseryProductAdd')->name('NurseryProductAdd');
});

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/login-user', 'Auth\LoginController@showUserLoginForm')->name('login.user');
Route::get('/register-user', 'Auth\RegisterController@showUserRegisterForm')->name('register.user');
Route::post('/login-user', 'Auth\LoginController@UserLogin')->name('login.user');
Route::post('/register-user', 'Auth\RegisterController@createUser')->name('register.user');


Route::get('shop', 'FrontendController@shop')->name('shop');
Route::get('single-shop', 'FrontendController@SingleShop')->name('SingleShop');
Route::post('add-cart', 'FrontendController@AddCart')->name('AddCart');
