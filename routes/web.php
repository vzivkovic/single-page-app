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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin'], function() {
    Route::group(['middleware' => 'auth.basic','prefix' => 'admin'], function () {

        Route::get('/', 'WelcomeController@index')->name('welcome.index');
        Route::group(['prefix' => 'welcome'], function () {
            Route::get('create', 'WelcomeController@create')->name('welcome.create');      // create and update Method
            Route::post('', 'WelcomeController@store')->name('welcome.store');
            Route::get('show', 'WelcomeController@show')->name('welcome.show');
            Route::get('{welcome}/edit', 'WelcomeController@edit')->name('welcome.edit');
            /*    Route::put('{welcome}', 'WelcomeController@update')->name('welcome.update');*/
            Route::delete('{welcome}', 'WelcomeController@delete')->name('welcome.destroy');
        });

        Route::group(['prefix' => 'images'], function (){
            Route::get('/', 'ImagesController@index')->name('images.index');
            Route::get('create', 'ImagesController@create')->name('images.create');      // create and update Method
            Route::post('', 'ImagesController@store')->name('images.store');
            Route::get('show/{image}', 'ImagesController@show')->name('images.show');
            Route::get('{image}/edit', 'ImagesController@edit')->name('images.edit');
            Route::patch('{image}', 'ImagesController@update')->name('images.update');
            Route::delete('{image}', 'ImagesController@delete')->name('images.destroy');
            Route::get('/account/{image}', 'ImagesController@getImage')->name('images.get');
        });

        Route::group(['prefix' => 'contacts'], function (){
            Route::get('/', 'ContactsController@index')->name('contacts.index');
            Route::get('create', 'ContactsController@create')->name('contacts.create');      // create and update Method
            Route::post('', 'ContactsController@store')->name('contacts.store');
            Route::get('show', 'ContactsController@show')->name('contacts.show');
            Route::get('{contact}/edit', 'ContactsController@edit')->name('contacts.edit');
            /*    Route::put('{contact}', 'ContactsController@update')->name('contacts.update');*/
            Route::delete('{contact}', 'ContactsController@delete')->name('contacts.destroy');
        });

        Route::group(['prefix' => 'catalogs'], function (){
            Route::get('/', 'CatalogsController@index')->name('catalogs.index');
            Route::get('create', 'CatalogsController@create')->name('catalogs.create');      // create and update Method
            Route::post('', 'CatalogsController@store')->name('catalogs.store');
            Route::get('show', 'CatalogsController@show')->name('catalogs.show');
            Route::get('{catalog}/edit', 'CatalogsController@edit')->name('catalogs.edit');
            Route::patch('{catalog}', 'CatalogsController@update')->name('catalogs.update');
            Route::delete('{catalog}', 'CatalogsController@delete')->name('catalogs.destroy');
            Route::get('/download/{catalog}', 'CatalogsController@downloadCatalog')->name('catalogs.download');
        });

        Route::group(['prefix' => 'users'], function () {
            Route::get('show', 'UsersController@show')->name('users.show');
            Route::get('{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::put('{user}', 'UsersController@update')->name('users.update');
            Route::get('/logout', 'UsersController@logout')->name('logout');
        });
    });
});
