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

require __DIR__ . '/auth.php';

Route::get('/', 'HomeController@home')->name('index');

Route::name('form.')->prefix('form')->group(function () {
	Route::post('store', 'FormController@store')->name('store');
	Route::get('thanku','FormController@thanku')->name('thanku');
	Route::get('get_existing_mems','FormController@get_existing_mems')->name('get_existing_mems');
	Route::get('exist-mems','FormController@existMems')->name('exist.mems');

	// Ajax Routes
	Route::get('load-header-form','HomeController@loadHeaderForm')->name('load.header_form');
	Route::get('load-acknowledgement-form','HomeController@loadAcknowldgementForm')->name('load.acknowledgement_form');
	Route::get('load-in-mems-form','HomeController@loadInMemsForm')->name('load.in_mems_form');
	Route::get('load-in-mems-new-form','HomeController@loadInMemsNewForm')->name('load.in_mems_new_form');
	Route::get('load-in-mems-existing-form','HomeController@loadInMemsExistingForm')->name('load.in_mems_existing_form');
	Route::get('load-in-mems-existing-data-form','HomeController@loadInMemsExistingDataForm')->name('load.in_mems_existing_data_form');
	Route::get('load-library-words-cost','HomeController@loadLibraryVerseCoast')->name('load.library.words.cost');
});

// admin authenticated routes
Route::name('admin.')->prefix('admin')->namespace('Admin')->middleware('auth', 'admin')->group(function () {
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');

	Route::name('setting.')->prefix('setting')->group(function () {
		Route::get('create', 'SettingController@create')->name('create');
		Route::post('store', 'SettingController@store')->name('store');
		Route::get('general', 'SettingController@general')->name('general');
	});



	Route::name('reporting.')->prefix('reporting')->group(function () {
		Route::get('acknowledge', 'ReportingController@acknowledge')->name('acknowledge');
		Route::get('get_ack_detail/{id?}','ReportingController@get_ack_detail')->name('get_ack_detail');
		Route::get('mems', 'ReportingController@mems')->name('mems');
		Route::get('mems-status/{id?}', 'ReportingController@mems_status')->name('mems.change.status');
		Route::get('get_mems_detail/{id?}','ReportingController@get_mems_detail')->name('get_mems_detail');
		Route::get('mems-verses/{id?}','ReportingController@memsVerses')->name('mems.verses');
		Route::post('update-acknowledge', 'ReportingController@updateAcknowledge')->name('acknowledge.update');
		Route::get('edit-acknowledgement','ReportingController@loadAcknowledgeForm')->name('load.edit.acknowledgement');
		Route::get('edit-mems','ReportingController@loadMemsForm')->name('load.edit.mems');
		Route::post('update-mems', 'ReportingController@updateMems')->name('mems.update');
	});

	Route::name('discounType.')->prefix('discounType')->group(function () {
		Route::get('list', 'DiscountTypeController@list')->name('list');
		Route::get('add', 'DiscountTypeController@add')->name('add');
		Route::get('edit/{id?}', 'DiscountTypeController@edit')->name('edit');
		Route::post('update/{id?}', 'DiscountTypeController@update')->name('update');
		Route::post('save', 'DiscountTypeController@store')->name('save');
		Route::get('delete/{id?}', 'DiscountTypeController@delete')->name('delete');
	});

	Route::name('by_key.')->prefix('keyby')->group(function () {
		Route::get('list', 'KeyByController@list')->name('list');
		Route::get('add', 'KeyByController@add')->name('add');
		Route::get('edit/{id?}', 'KeyByController@edit')->name('edit');
		Route::post('save', 'KeyByController@save')->name('save');
		Route::get('delete/{id?}', 'KeyByController@delete')->name('delete');
	});

	Route::name('discounRate.')->prefix('discounRate')->group(function () {
		Route::get('list', 'DiscountRateController@list')->name('list');
		Route::get('add', 'DiscountRateController@add')->name('add');
		Route::get('edit/{id?}', 'DiscountRateController@edit')->name('edit');
		Route::post('update/{id?}', 'DiscountRateController@update')->name('update');
		Route::post('save', 'DiscountRateController@store')->name('save');
		Route::get('delete/{id?}', 'DiscountRateController@delete')->name('delete');
	});

	Route::name('library_Verse.')->prefix('library_Verse')->group(function () {
		Route::get('list', 'LibraryVerseController@list')->name('list');
		Route::get('add', 'LibraryVerseController@add')->name('add');
		Route::get('edit/{id?}', 'LibraryVerseController@edit')->name('edit');
		Route::post('update/{id?}', 'LibraryVerseController@update')->name('update');
		Route::post('save', 'LibraryVerseController@store')->name('save');
		Route::get('delete/{id?}', 'LibraryVerseController@delete')->name('delete');
	});

	Route::name('payment_method.')->prefix('payment_method')->group(function () {
		Route::get('list', 'PaymentMethodController@list')->name('list');
		Route::get('add', 'PaymentMethodController@add')->name('add');
		Route::get('edit/{id?}', 'PaymentMethodController@edit')->name('edit');
		Route::post('update/{id?}', 'PaymentMethodController@update')->name('update');
		Route::post('save', 'PaymentMethodController@store')->name('save');
		Route::get('delete/{id?}', 'PaymentMethodController@delete')->name('delete');
	});

	Route::name('taken_by.')->prefix('taken_by')->group(function () {
		Route::get('list', 'TakenByController@list')->name('list');
		Route::get('add', 'TakenByController@add')->name('add');
		Route::get('edit/{id?}', 'TakenByController@edit')->name('edit');
		Route::post('update/{id?}', 'TakenByController@update')->name('update');
		Route::post('save', 'TakenByController@store')->name('save');
		Route::get('delete/{id?}', 'TakenByController@delete')->name('delete');
	});

	Route::name('visitor_link.')->prefix('visitor_link')->group(function () {
		Route::get('list', 'VisitorController@list')->name('list');
		Route::get('add', 'VisitorController@add')->name('add');
		Route::get('edit/{id?}', 'VisitorController@edit')->name('edit');
		Route::post('update/{id?}', 'VisitorController@update')->name('update');
		Route::post('save', 'VisitorController@store')->name('save');
		Route::get('delete/{id?}', 'VisitorController@delete')->name('delete');
	});

	Route::name('aniversary.')->prefix('aniversary')->group(function () {
		Route::get('list', 'AniversaryNoController@list')->name('list');
		Route::get('add', 'AniversaryNoController@add')->name('add');
		Route::get('edit/{id?}', 'AniversaryNoController@edit')->name('edit');
		Route::post('update/{id?}', 'AniversaryNoController@update')->name('update');
		Route::post('save', 'AniversaryNoController@store')->name('save');
		Route::get('delete/{id?}', 'AniversaryNoController@delete')->name('delete');
	});

	Route::name('chruch.')->prefix('chruch')->group(function () {
		Route::get('list', 'ChruchController@list')->name('list');
		Route::get('add', 'ChruchController@add')->name('add');
		Route::get('edit/{id?}', 'ChruchController@edit')->name('edit');
		Route::post('update/{id?}', 'ChruchController@update')->name('update');
		Route::post('save', 'ChruchController@store')->name('save');
		Route::get('delete/{id?}', 'ChruchController@delete')->name('delete');
	});

	Route::name('msg_type.')->prefix('msg_type')->group(function () {
		Route::get('list', 'MessageTypeController@list')->name('list');
		Route::get('add', 'MessageTypeController@add')->name('add');
		Route::get('edit/{id?}', 'MessageTypeController@edit')->name('edit');
		Route::post('update/{id?}', 'MessageTypeController@update')->name('update');
		Route::post('save', 'MessageTypeController@store')->name('save');
		Route::get('delete/{id?}', 'MessageTypeController@delete')->name('delete');
	});
});
