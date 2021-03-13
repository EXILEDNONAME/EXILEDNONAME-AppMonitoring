<?php

// MANAGEMENT ACCESSES
Route::group([
  'as' => 'system.management.access.',
  'prefix' => 'dashboard/management/accesses',
  'namespace' => 'Backend\System\Management',
], function(){
  Route::get('datatables', 'AccessController@data')->name('datatables');
  Route::get('enable/{id}', 'AccessController@enable')->name('enable');
  Route::get('disable/{id}', 'AccessController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'AccessController@status')->name('status');
  Route::get('delete/{id}', 'AccessController@delete')->name('delete');
  Route::get('deleteall', 'AccessController@deleteall')->name('deleteall');
  Route::resource('/', 'AccessController')->parameters(['' => 'id']);
});

// MANAGEMENT USERS
Route::group([
  'as' => 'system.management.user.',
  'prefix' => 'dashboard/management/users',
  'namespace' => 'Backend\System\Management',
], function(){
  Route::get('datatables', 'UserController@data')->name('datatables');
  Route::get('enable/{id}', 'UserController@enable')->name('enable');
  Route::get('disable/{id}', 'UserController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status');
  Route::get('delete/{id}', 'UserController@delete')->name('delete');
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall');
  Route::resource('/', 'UserController')->parameters(['' => 'id']);
});

// PROFILE
Route::group([
  'as' => 'dashboard.profile.',
  'prefix' => 'dashboard/profile',
  'namespace' => 'Backend\System',
], function(){
  Route::get('about', 'ProfileController@about')->name('about');
  Route::get('password', 'ProfileController@password')->name('password');
  Route::post('change-password', 'ProfileController@change_password')->name('change-password');
  Route::get('personal-information', 'ProfileController@personal_information')->name('personal-information');
  Route::get('timeline', 'ProfileController@timeline')->name('timeline');
  Route::resource('/', 'ProfileController')->parameters(['' => 'id']);
});

// TABLE - DUMMIES
Route::group([
  'as' => 'dummy.',
  'prefix' => 'dashboard/dummies',
  'namespace' => 'Backend\System',
], function(){
  Route::get('status-done/{id}', 'DummyController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'DummyController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'DummyController@enable')->name('enable');
  Route::get('disable/{id}', 'DummyController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'DummyController@status')->name('status');
  Route::get('delete/{id}', 'DummyController@delete')->name('delete');
  Route::get('deleteall', 'DummyController@deleteall')->name('deleteall');
  Route::resource('/', 'DummyController')->parameters(['' => 'id']);
});
