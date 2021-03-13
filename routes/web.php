<?php

Auth::routes();
Route::get('/', function () { return view('pages.frontend.index'); });

// LANGUAGE
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// DASHBOARD
Route::get('dashboard', 'Backend\System\DashboardController@index')->name('dashboard.index');
Route::get('dashboard/file-manager', 'Backend\System\FileManagerController@index')->name('dashboard.file-manager');
Route::get('dashboard/logout', 'Backend\System\DashboardController@logout')->name('dashboard.logout');

// SYSTEM
require __DIR__.'/backend/system/default.php';
require __DIR__.'/backend/main/default.php';
