<?php

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

include __DIR__ . DIRECTORY_SEPARATOR . 'api.php';

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('resize-canvas', 'HomeController@resizeCanvas')->name('resizeCanvas');
Route::post('/contact','HomeController@PostContact')->name('contact');

Route::get('/bat-dong-san/{product_cate}', 'HomeController@productCate')->name('productCate');
Route::get('/chi-tiet/{product}', 'HomeController@productDetail')->name('productDetail');
Route::get('/du-an/{project}', 'HomeController@productsOfProject')->name('productsOfProject');
Route::get('/quan/{district}', 'HomeController@productsOfDistrict')->name('productsOfDistrict');

Route::get('tim-kiem', 'HomeController@filter')->name('filter');
Route::get('lien-he', 'HomeController@intro')->name('intro');

Route::prefix('ajax')->group(function () {
    Route::post('/getProductCateOfKeyword', 'AjaxController@getProductCateOfKeyword');
    Route::post('/getDistrictOfKeyword', 'AjaxController@getDistrictOfKeyword');
    Route::post('/getProjectOfKeyword', 'AjaxController@getProjectOfKeyword');
});

Route::prefix('admin')->group(function () {
	Route::get('/lien-he','ContactController@index')->name('listcontact');
	Route::get('/xoa-lien-he/{id}','ContactController@delete')->name('deletecontact');
	Route::prefix('ajax')->group(function () {
        Route::post('/showDistrictOfCity', 'ProjectController@showDistrictOfCity');
        Route::post('/showCommuneOfDistrict', 'ProjectController@showCommuneOfDistrict');
        Route::post('/showProjectOfCity', 'ProjectController@showProjectOfCity');
        Route::post('/showProjectOfDistrict', 'ProjectController@showProjectOfDistrict');
        Route::post('/showProjectOfCommune', 'ProjectController@showProjectOfCommune');
    });

    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

    Route::prefix('system')->group(function () {
    	Route::prefix('user')->group(function () {
	    	Route::get('/', 'UserController@index')
	    		->name('admin.system.user.index')->middleware('checkPermission:user-list');

	    	Route::get('create', 'UserController@create')
	    		->name('admin.system.user.create')->middleware('checkPermission:user-create');

	    	Route::post('store', 'UserController@store')
	    		->name('admin.system.user.store')->middleware('checkPermission:user-create');

	    	Route::get('edit/{id}', 'UserController@edit')
	    		->name('admin.system.user.edit')->middleware('checkPermission:user-edit');

	    	Route::post('update/{id}', 'UserController@update')
	    		->name('admin.system.user.update')->middleware('checkPermission:user-edit');

	    	Route::get('delete/{id}', 'UserController@delete')
	    		->name('admin.system.user.delete')->middleware('checkPermission:user-delete');
	    });

	    Route::prefix('role')->group(function () {
	    	Route::get('/', 'RoleController@index')->name('admin.system.role.index');
	    	Route::get('create', 'RoleController@create')->name('admin.system.role.create');
	    	Route::post('store', 'RoleController@store')->name('admin.system.role.store');
	    	Route::get('edit/{id}', 'RoleController@edit')->name('admin.system.role.edit');
	    	Route::post('update/{id}', 'RoleController@update')->name('admin.system.role.update');
	    	Route::get('delete/{id}', 'RoleController@delete')->name('admin.system.role.delete');

	    	Route::get('/', 'RoleController@index')
	    		->name('admin.system.role.index')->middleware('checkPermission:role-list');

	    	Route::get('create', 'RoleController@create')
	    		->name('admin.system.role.create')->middleware('checkPermission:role-create');

	    	Route::post('store', 'RoleController@store')
	    		->name('admin.system.role.store')->middleware('checkPermission:role-create');

	    	Route::get('edit/{id}', 'RoleController@edit')
	    		->name('admin.system.role.edit')->middleware('checkPermission:role-edit');

	    	Route::post('update/{id}', 'RoleController@update')
	    		->name('admin.system.role.update')->middleware('checkPermission:role-edit');

	    	Route::get('delete/{id}', 'RoleController@delete')
	    		->name('admin.system.role.delete')->middleware('checkPermission:role-delete');
	    });

	    Route::prefix('permission')->group(function () {
	    	Route::get('/', 'PermissionController@index')
	    		->name('admin.system.permission.index')->middleware('checkPermission:permission-list');

	    	Route::get('create', 'PermissionController@create')
	    		->name('admin.system.permission.create')->middleware('checkPermission:permission-create');

	    	Route::post('store', 'PermissionController@store')
	    		->name('admin.system.permission.store')->middleware('checkPermission:permission-create');

	    	Route::get('edit/{id}', 'PermissionController@edit')
	    		->name('admin.system.permission.edit')->middleware('checkPermission:permission-edit');

	    	Route::post('update/{id}', 'PermissionController@update')
	    		->name('admin.system.permission.update')->middleware('checkPermission:permission-edit');

	    	Route::get('delete/{id}', 'PermissionController@delete')
	    		->name('admin.system.permission.delete')->middleware('checkPermission:permission-delete');
	    });

        Route::prefix('menu')->group(function () {
            Route::get('/', 'MenuController@index')
                ->name('admin.system.menu.index')->middleware('checkPermission:menu-list');

            Route::get('create', 'MenuController@create')
                ->name('admin.system.menu.create')->middleware('checkPermission:menu-create');

            Route::post('store', 'MenuController@store')
                ->name('admin.system.menu.store')->middleware('checkPermission:menu-create');

            Route::get('edit/{id}', 'MenuController@edit')
                ->name('admin.system.menu.edit')->middleware('checkPermission:menu-edit');

            Route::post('update/{id}', 'MenuController@update')
                ->name('admin.system.menu.update')->middleware('checkPermission:menu-edit');

            Route::get('delete/{id}', 'MenuController@delete')
                ->name('admin.system.menu.delete')->middleware('checkPermission:menu-delete');
        });
	});

	Route::prefix('product-cate')->group(function () {
    	Route::get('/', 'ProductCateController@index')
    		->name('admin.productCate.index')->middleware('checkPermission:productCate-list');

    	Route::get('create', 'ProductCateController@create')
    		->name('admin.productCate.create')->middleware('checkPermission:productCate-create');

    	Route::post('store', 'ProductCateController@store')
    		->name('admin.productCate.store')->middleware('checkPermission:productCate-create');

    	Route::get('edit/{id}', 'ProductCateController@edit')
    		->name('admin.productCate.edit')->middleware('checkPermission:productCate-edit');

    	Route::post('update/{id}', 'ProductCateController@update')
    		->name('admin.productCate.update')->middleware('checkPermission:productCate-edit');

    	Route::get('delete/{id}', 'ProductCateController@delete')
    		->name('admin.productCate.delete')->middleware('checkPermission:productCate-delete');
    });

    Route::prefix('project')->group(function () {
    	Route::get('/', 'ProjectController@index')
    		->name('admin.project.index')->middleware('checkPermission:project-list');

    	Route::get('create', 'ProjectController@create')
    		->name('admin.project.create')->middleware('checkPermission:project-create');

    	Route::post('store', 'ProjectController@store')
    		->name('admin.project.store')->middleware('checkPermission:project-create');

    	Route::get('edit/{id}', 'ProjectController@edit')
    		->name('admin.project.edit')->middleware('checkPermission:project-edit');

    	Route::post('update/{id}', 'ProjectController@update')
    		->name('admin.project.update')->middleware('checkPermission:project-edit');

    	Route::get('delete/{id}', 'ProjectController@delete')
    		->name('admin.project.delete')->middleware('checkPermission:project-delete');
    });

    Route::prefix('product')->group(function () {
    	Route::get('/', 'ProductController@index')
    		->name('admin.product.index')->middleware('checkPermission:product-list');

        Route::post('/', 'ProductController@index')
            ->name('admin.product.index')->middleware('checkPermission:product-list');

    	Route::get('create', 'ProductController@create')
    		->name('admin.product.create')->middleware('checkPermission:product-create');

    	Route::post('store', 'ProductController@store')
    		->name('admin.product.store')->middleware('checkPermission:product-create');

    	Route::get('edit/{id}', 'ProductController@edit')
    		->name('admin.product.edit')->middleware('checkPermission:product-edit');

    	Route::post('update/{id}', 'ProductController@update')
    		->name('admin.product.update')->middleware('checkPermission:product-edit');

    	Route::get('delete/{id}', 'ProductController@delete')
    		->name('admin.product.delete')->middleware('checkPermission:product-delete');
    });

    Route::prefix('post-category')->group(function () {
    	Route::get('/', 'PostCateController@index')
    		->name('admin.post_category.index')->middleware('checkPermission:post-cate-list');

    	Route::get('create', 'PostCateController@create')
    		->name('admin.post_category.create')->middleware('checkPermission:post-cate-create');

    	Route::post('store', 'PostCateController@store')
    		->name('admin.post_category.store')->middleware('checkPermission:post-cate-create');

    	Route::get('edit/{id}', 'PostCateController@edit')
    		->name('admin.post_category.edit')->middleware('checkPermission:post-cate-edit');

    	Route::post('update/{id}', 'PostCateController@update')
    		->name('admin.post_category.update')->middleware('checkPermission:post-cate-edit');

    	Route::get('delete/{id}', 'PostCateController@delete')
    		->name('admin.post_category.delete')->middleware('checkPermission:post-cate-delete');
    });

    Route::prefix('post')->group(function () {
    	Route::get('/', 'PostController@index')
    		->name('admin.post.index')->middleware('checkPermission:post-list');

    	Route::get('create', 'PostController@create')
    		->name('admin.post.create')->middleware('checkPermission:post-create');

    	Route::post('store', 'PostController@store')
    		->name('admin.post.store')->middleware('checkPermission:post-create');

    	Route::get('edit/{id}', 'PostController@edit')
    		->name('admin.post.edit')->middleware('checkPermission:post-edit');

    	Route::post('update/{id}', 'PostController@update')
    		->name('admin.post.update')->middleware('checkPermission:post-edit');

    	Route::get('delete/{id}', 'PostController@delete')
    		->name('admin.post.delete')->middleware('checkPermission:post-delete');
    });
});
