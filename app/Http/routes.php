 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('user', 'UserController');

Route::resource('role', 'RoleController');

Route::resource('maul','MaulController');

Route::resource('goods', 'GoodsRecievedController');

Route::resource('requisition', 'RequisitionsController');

Route::resource('asset_mgt', 'AssetManagementController');

Route::resource('supplier', 'SupplierController');

//Route::get('maul', 'MaulController@index');
