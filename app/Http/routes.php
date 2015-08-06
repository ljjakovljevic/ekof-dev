<?php

Route::get('/', [
    'as' => 'home.index', 'uses' => 'PagesController@index'
]);

/**
 * ADMIN StudyLevels Route
 */
Route::group(['prefix' => 'админ'], function () {

    // StudyLevels
    Route::get('ниво-студија', [
        'as' => 'study-levels.index', 'uses' => 'StudyLevelsController@index'
    ]);
    Route::post('ниво-студија', [
        'as' => 'study-levels.store', 'uses' => 'StudyLevelsController@store'
    ]);
    Route::get('ниво-студија/create', [
        'as' => 'study-levels.create', 'uses' => 'StudyLevelsController@create'
    ]);
    Route::patch('ниво-студија/{slug}', 'StudyLevelsController@update');
    Route::delete('ниво-студија/{slug}', [
        'as' => 'study-levels.destroy', 'uses' => 'StudyLevelsController@destroy'
    ]);
    Route::put('ниво-студија/{slug}', [
        'as' => 'study-levels.update', 'uses' => 'StudyLevelsController@update'
    ]);
    // Show Route
    Route::get('ниво-студија/{slug}/edit', [
        'as' => 'study-levels.edit', 'uses' => 'StudyLevelsController@edit'
    ]);

    // StudyTypes
    Route::get('врсте-студија', [
        'as' => 'study-types.index', 'uses' => 'StudyTypesController@index'
    ]);
    Route::post('врсте-студија', [
        'as' => 'study-types.store', 'uses' => 'StudyTypesController@store'
    ]);
    Route::get('врсте-студија/create', [
        'as' => 'study-types.create', 'uses' => 'StudyTypesController@create'
    ]);
    Route::patch('врсте-студија/{slug}', 'StudyTypesController@update');
    Route::delete('врсте-студија/{slug}', [
        'as' => 'study-types.destroy', 'uses' => 'StudyTypesController@destroy'
    ]);
    Route::put('врсте-студија/{slug}', [
        'as' => 'study-types.update', 'uses' => 'StudyTypesController@update'
    ]);
    // Show Route
    Route::get('врсте-студија/{slug}/edit', [
        'as' => 'study-types.edit', 'uses' => 'StudyTypesController@edit'
    ]);
});

/**
 * PUBLIC StudyLevels Route
 */
Route::get('ниво-студија', [
    'as' => 'study-levels.all', 'uses' => 'StudyLevelsController@all'
]);
Route::get('ниво-студија/{slug}', [
    'as' => 'study-levels.showOne', 'uses' => 'StudyLevelsController@show'
]);

/**
 * PUBLIC StudyTypes Route
 */
Route::get('врсте-студија', [
    'as' => 'study-types.list', 'uses' => 'StudyTypesController@all'
]);
Route::get('врсте-студија/{slug}', [
    'as' => 'study-types.show', 'uses' => 'StudyTypesController@show'
]);