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



///Client-----------------------------------------------------------------------------------------------
//Просмотр продуктов


Route::any('/send-email', 'FeedbackController@send')->name('feedback');
//Route::any('seed','SeedShController@run')->name('seed');

Auth::routes();

// Route::get('register', function () {
//     abort(404);
// });
Route::get('cixis', function () {
    abort(404);
});

Route::get('', function () {
    return redirect()->route('filial');

});
Route::get('/filial', 'ClientController@filial')->name('filial');

Route::match(['get','post'],'/ajax', 'Ajax@ajax')->name('ajax');

Route::match(['get','post'],'/filter', 'Filter@filter')->name('filter');

Route::match(['get','post'],'/search', 'Search@search')->name('search');

//Основные машруты клиента ----------------------------------------------------------------------------------------------------------------------------------
Route::group(['prefix' => 'az'],function () {

Route::get('/', 'ClientController@main')->name('mainClient');
Route::get('/about', 'ClientController@about')->name('about');
Route::get('/event', 'ClientController@event')->name('event');


Route::match(['get','post'],'/{type}', 'ClientController@category')->name('categoryClient');
Route::get('/{type}/{id}', 'ClientController@productClient')->name('productClient');
Route::match(['get','post'],'/{type}/{id}/buy', 'ClientController@buy')->name('buy');

});



Route::group(['prefix' => 'luxhome'],function () {

    Route::get('/', 'LuxController@main')->name('luxhomeMain');
    Route::get('/aboutLux', 'LuxController@about')->name('aboutLux');
    Route::get('/filialLux', 'LuxController@filial')->name('filialLux');

});

//Конец основных машрутов клиента

Route::group(['prefix' => 'managment', 'middleware' => ['auth']], function () {
    //EXTRA


    Route::match(['post', 'get','put'], '/edit/maket/{category}/{type}','PanelController@edit_maket')->name('edit-maket');


    Route::get('/users', 'PanelController@users')->name('users');
    Route::get('/messages', 'PanelController@messages')->name('messages');
    Route::match(['post', 'get'], '/info', 'PanelController@edit_info')->name('edit-info');
    Route::match(['post', 'get'], '/profile', 'PanelController@edit_profile')->name('edit-profile');

    //Панель модератора-----------------------------------------------------------------------------------------------------------------------------------------

    Route::get('/order', 'PanelController@order')->name('order');
    Route::get('/main', function () {
    return redirect()->route('order');
});

    Route::match(['post', 'get'], '/percentkredit', 'PercentKreditController@view')->name('view-percentkredit');
    Route::match(['post', 'get'], '/percentkredit/add', 'PercentKreditController@add')->name('add-percentkredit');
    Route::match(['post', 'get'], '/percentkredit/edit/{id}', 'PercentKreditController@edit')->name('edit-percentkredit');
    Route::match(['post', 'get'], '/percentkredit/delete/{id}', 'PercentKreditController@delete')->name('delete-percentkredit');

    Route::match(['post', 'get'], '/info', 'PanelController@edit_info')->name('edit-info');
    Route::get('/users', 'PanelController@users')->name('users');
    Route::get('/messages', 'PanelController@messages')->name('messages');
    Route::match(['post', 'get'], '/profile', 'PanelController@edit_profile')->name('edit-profile');
    Route::match(['get', 'post'], '/orders/edit/{id}', ['uses' => 'PanelController@edit_order', 'as' => 'edit-order']);
    Route::match(['get', 'post'], '/role/add', ['uses' => 'PanelController@addrole', 'as' => 'add-role']);
    Route::match(['get', 'post'], '/role/edit/{id}', ['uses' => 'PanelController@edit_role', 'as' => 'edit-role']);
    Route::match(['get', 'post'], '/user/delete/{id}', ['uses' => 'PanelController@delete_user', 'as' => 'delete-user']);
    Route::match(['get', 'post'], '/user/add', ['uses' => 'PanelController@adduser', 'as' => 'add-user']);
    Route::match(['get', 'post'], '/product/brend/', ['uses' => 'ProductController@addbrend', 'as' => 'add-brend']);

    //Фильтры продуктов----------------------------------------------------------------------------------------------------------------------------------------
    Route::match(['get', 'post'], '/product/filter/{category}/{type}/add', ['uses' => 'PanelController@addfilter', 'as' => 'add-filter']);
    Route::match(['get', 'post'], '/product/filter/edit/{id}', ['uses' => 'PanelController@editfilter', 'as' => 'edit-filter']);
    Route::match(['get', 'post'], '/product/filter/delete/{category}/{type}/{id}/', ['uses' => 'PanelController@deletefilter', 'as' => 'delete-filter']);


    //Карты---------------------------------------------------------------------------------------------------------------------------------------------------
    Route::get('/maps', 'PanelController@maps')->name('maps');
    Route::match(['get', 'post'], '/add/map/', ['uses' => 'PanelController@add_map', 'as' => 'add-map']);
    Route::match(['get', 'post'], '/edit/map/{id}', ['uses' => 'PanelController@edit_map', 'as' => 'edit-map']);
    Route::match(['get', 'post'], '/delete/map/{id}', ['uses' => 'PanelController@delete_map', 'as' => 'delete-map']);

    //Соцсети---------------------------------------------------------------------------------------------------------------------------------------------------
    Route::get('/social', 'PanelController@social')->name('social');
    Route::match(['get', 'post'], '/add/social/', ['uses' => 'PanelController@add_social', 'as' => 'add-social']);
    Route::match(['get', 'post'], '/edit/social/{id}', ['uses' => 'PanelController@edit_social', 'as' => 'edit-social']);
    Route::match(['get', 'post'], '/delete/social/{id}', ['uses' => 'PanelController@delete_social', 'as' => 'delete-social']);

    //Акции---------------------------------------------------------------------------------------------------------------------------------------------------
    Route::get('/baner', 'PanelController@baner')->name('baner');
    Route::match(['get', 'post'], '/add/baner/', ['uses' => 'PanelController@add_baner', 'as' => 'add-baner']);
    Route::match(['get', 'post'], '/edit/baner/{id}', ['uses' => 'PanelController@edit_baner', 'as' => 'edit-baner']);
    Route::match(['get', 'post'], '/delete/baner/{id}', ['uses' => 'PanelController@delete_baner', 'as' => 'delete-baner']);


    Route::get('/map/del/{id}', 'PanelController@del-map')->name('map-delete');





    //Товары в админке--------------------------------------------------------------------------------------------------------------------------------------------------

    Route::match(['get', 'post'], '/product/view/{category}/{type}', ['uses' => 'ProductViewController@ViewProduct', 'as' => 'viewProduct']);
    Route::match(['get', 'post'], '/product/add/{category}/{type}', ['uses' => 'ProductAddController@addProduct', 'as' => 'addProduct']);
    Route::match(['get', 'post'], 'product/edit/{category}/{type}/{id}', ['uses' => 'ProductEditController@editProduct', 'as' => 'editProduct']);
    Route::match(['get', 'post'], 'product/delete/{category}/{type}/{id}', ['uses' => 'ProductDeleteController@deleteProduct', 'as' => 'deleteProduct']);
    Route::match(['get', 'post'], 'add/atr', ['uses' => 'PanelController@addAtr', 'as' => 'addAtr']);
    Route::match(['get', 'post'], 'add/typemenu', ['uses' => 'PanelController@addTypeMenu', 'as' => 'addTypeMenu']);

    //конец Товары в админке--------------------------------------------------------------------------------------------------------------------------------------------------
});

Route::any('test', 'TestController@test')->name('test');
