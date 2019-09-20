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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('CheckAdmin');

//user
    //home
Route::get('/', 'User\UserController@welcome')->name('welcome');

    //hien thi thong tin sp
Route::get('/thongtinSP/{id}', 'User\UserController@description')->name('thongtinSP');


    //tim kiem
Route::post('/search','User\UserController@search')->name('search');

    //tim kiem
Route::get('/ajax','User\UserController@ajax')->name('ajax');


     // thanh toan
Route::get('/pay/{id}','User\PayController@homePay')->name('homepay');
Route::post('/savePay','User\PayController@savePay')->name('savepay');
    //quangcao
Route::get('/quangcao','User\UserController@quangcao')->name('quangcao');

//Admin

//QLDMSP
Route::get('/QLDMSP', 'Admin\QLDMSP_Controller@homeQLDMSP')->name('homeQLDMSP');
    //QLDM
Route::get('/addCategory','Admin\QLDM_Controller@add')->name('addDM');
Route::post('/addCategory','Admin\QLDM_Controller@addCategory')->name('addDM');

Route::get('/editCategory/{id}','Admin\QLDM_Controller@edit')->name('editDM');
Route::post('/editCategory/{id}','Admin\QLDM_Controller@editCategory')->name('editDM');

Route::post('/deleteCategory/{id}','Admin\QLDM_Controller@deleteCategory')->name('deleteDM');
Route::get('/ajaxSP','Admin\QLDM_Controller@ajax')->name('ajaxGetProduct');
    //QLSP
Route::get('/addProduct','Admin\QLSP_Controller@add')->name('addSP');
Route::post('/addProduct','Admin\QLSP_Controller@addProduct')->name('addSP');

Route::get('/editProduct/{id}','Admin\QLSP_Controller@edit')->name('editSP');
Route::post('/editProduct/{id}','Admin\QLSP_Controller@editProduct')->name('editSP');

Route::post('/deleteProduct/{id}','Admin\QLSP_Controller@deleteProduct')->name('deleteSP');

Route::post('/searchSP','Admin\QLSP_Controller@searchSP')->name('searchSP');


//QLND
Route::get('/QLND', 'Admin\QLND_Controller@homeQLND')->name('homeQLND');

Route::get('/editQLND/{id}','Admin\QLND_Controller@edit')->name('edit');
Route::post('/editQLND/{id}','Admin\QLND_Controller@editQLND')->name('editQLND');
Route::post('/delete','Admin\QLND_Controller@deleteQLND')->name('deleteQLND');

//QLDH
Route::get('/QLDH','Admin\QLDH_Controller@homeQLDH')->name('homeQLDH');
Route::post('/delete/{id}','Admin\QLDH_Controller@delete')->name('delete');




