<?php

Route::get('/', [
    'as' => 'home.index', 'uses' => 'PagesController@index'
]);

/**
 * ADMIN StudyLevels Route
 */
Route::group(['prefix' => 'админ'], function () {

    // Services
    Route::get('услуге', [
        'as' => 'services.index', 'uses' => 'StudyTypesController@index'
    ]);
    Route::post('услуге', [
        'as' => 'services.store', 'uses' => 'StudyTypesController@store'
    ]);
    Route::get('услуге/create', [
        'as' => 'services.create', 'uses' => 'StudyTypesController@create'
    ]);
    Route::patch('услуге/{slug}', 'StudyTypesController@update');
    Route::delete('услуге/{slug}', [
        'as' => 'services.destroy', 'uses' => 'StudyTypesController@destroy'
    ]);
    Route::put('услуге/{slug}', [
        'as' => 'services.update', 'uses' => 'StudyTypesController@update'
    ]);
    // Show Route
    Route::get('услуге/{slug}/edit', [
        'as' => 'services.edit', 'uses' => 'StudyTypesController@edit'
    ]);

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
 * PUBLIC Faculties Route
 */
Route::get('факултет', [
    'as' => 'faculties.all', 'uses' => 'FacultiesController@all'
]);
Route::get('факултет/{slug}', [
    'as' => 'faculties.show', 'uses' => 'FacultiesController@show'
]);

/**
 * PUBLIC Services Route
 */
Route::get('услуге', [
    'as' => 'services.all', 'uses' => 'ServicesController@all'
]);
Route::get('услуге/{slug}', [
    'as' => 'services.show', 'uses' => 'ServicesController@show'
]);

/**
 * PUBLIC StudyLevels Route
 */
Route::get('ниво-студија', [
    'as' => 'study-levels.all', 'uses' => 'StudyLevelsController@all'
]);
Route::get('ниво-студија/{slug}', [
    'as' => 'study-levels.show', 'uses' => 'StudyLevelsController@show'
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