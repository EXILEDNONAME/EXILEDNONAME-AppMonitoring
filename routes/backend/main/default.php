<?php

// Monitorings
Route::group([
  'as' => 'monitoring.',
  'prefix' => 'dashboard/monitorings',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'MonitoringController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'MonitoringController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'MonitoringController@enable')->name('enable');
  Route::get('disable/{id}', 'MonitoringController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'MonitoringController@status')->name('status');
  Route::get('delete/{id}', 'MonitoringController@delete')->name('delete');
  Route::get('deleteall', 'MonitoringController@deleteall')->name('deleteall');
  Route::resource('/', 'MonitoringController')->parameters(['' => 'id']);
});
