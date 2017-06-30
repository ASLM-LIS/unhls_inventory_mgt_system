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

Route::resource('/home', 'HomeController@index');

Route::resource('user', 'UserController');

Route::resource('role', 'RoleController');

Route::resource('goods', 'GoodsRecievedController');

Route::resource('asset_mgt', 'AssetManagementController');

Route::resource('Supply_Chain_mgt', 'SupplyChainMgt');

Route::resource('vouchers', 'VoucherController');

Route::resource('requisition_form', 'RequisitionFormController');

Route::resource('purchase_order_forms','PurchaseOrderController');

Route::resource('mildmay', 'MildmayController');

Route::resource('supplier', 'SupplierController');

Route::resource('stock_card', 'StockCardController');

Route::resource('stock_level', 'StockLevelController');

//#################***************************#############################

//Route::get('importExport', 'MaatwebsiteDemoController@importExport');

Route::get('downloadExcel/{type}', 'DownloadExcelController@downloadExcel');

Route::post('importExcel', 'DownloadExcelController@importExcel');

Route::resource('importExcel','DownloadExcelController');

Route::resource('ictasset','ictAssetController');

//Route::get('maul', 'MaulController@index');
