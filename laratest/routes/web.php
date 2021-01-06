<?php
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    echo "index page";
});
Route::get('/c_registration/rules', 'T_RegistrationController@rules')->name('rules.index');
Route::get('/c_registration', 'T_RegistrationController@insert')->name('registration.index');
Route::post('/c_registration', 'T_RegistrationController@store');
Route::get('/c_login', 'T_LoginController@index')->name('login.index');
Route::post('/c_login', ['uses'=>'T_LoginController@verify']);
Route::get('/c_logout', ['as'=>'logout.index', 'uses'=>'T_logoutController@index']);


/*Route::group(['middleware'=>'sess'], function(){
	Route::get('/home', 'HomeController@index')->middleware('sess');
	Route::get('/home/edit/{id}', 'HomeController@edit')->middleware('sess');
	Route::post('/home/edit/{id}', 'HomeController@update')->middleware('sess');
	Route::get('/home/delete/{id}', 'HomeController@delete')->middleware('sess');
	Route::post('/home/delete/{id}', 'HomeController@destroy')->middleware('sess');
});*/

Route::middleware(['tsess'])->group(function(){

	Route::get('/c_home', 'T_HomeController@index')->name('home.index');

	Route::group(['middleware'=>['ttype']], function(){
		Route::get('/c_home/availableproducts', 'T_AvailableController@index')->name('home.available');
		Route::get('/c_home/profile', 'T_ProfileController@tprofile')->name('home.tprofile');
		Route::get('/c_home/profile/edit/{id}', 'T_ProfileController@pedit')->name('home.pedit');
		Route::post('/c_home/profile/edit/{id}', 'T_ProfileController@pupdate');
	
		Route::get('/c_home/offeredproducts', 'T_OfferedController@offered')->name('home.offered');
	
		Route::get('/c_home/customerssinfo', 'T_CustomersController@customers')->name('home.customersinfo');
		Route::post('/c_home/customersinfo', 'T_CustomersController@search');
		Route::get('/c_home/contactmanager', 'T_ManagerController@allmanager')->name('home.cwm');
		Route::post('/c_home/contactmanager', 'T_ManagerController@search');
		Route::get('/c_home/ratings', 'T_RatingsController@ratings')->name('home.ratings');
	    Route::get('/c_home/other_products', 'T_OtherController@other')->name('home.other');
	
		Route::get('/c_home/sellproduct', 'T_FileuploadController@upload')->name('home.sellproduct');
		Route::post('/c_home/sellproduct', 'T_FileuploadController@store');
		Route::get('/c_home/sellproduct/check', 'T_FileuploadController@check')->name('home.check');
		Route::get('/c_home/sellproduct/check/delete/{id}', 'T_FileuploadController@delete')->name('home.checkdelete');
		Route::post('/c_home/sellproduct/check/delete/{id}', 'T_FileuploadController@destroy');
		
		Route::get('/c_home/cashbackproducts', 'T_CashbackController@cashback')->name('home.cashback');
		
		
		Route::get('/c_home/complain', 'T_ComplainController@insert')->name('home.cta');
		Route::post('/c_home/complain', 'T_ComplainController@store');
		Route::get('/c_home/complain/check', 'T_ComplainController@check')->name('home.ctacheck');
		Route::get('/c_home/complain/check/delete/{id}', 'T_ComplainController@delete')->name('home.ctadelete');
		Route::post('/c_home/complain/check/delete/{id}', 'T_ComplainController@destroy');
		
		
		
	
		
		Route::get('/c_home/videocall', 'T_HomeController@call')->name('home.call');
	});
	
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
