<?php

Route::get('/', [
    'as' => 'home.index', 'uses' => 'PagesController@index'
]);

/**
 * ADMIN StudyLevels Route
 */
Route::group(['prefix' => 'админ'], function () {
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
    Route::get('ниво-студија/{slug}', [
        'as' => 'study-levels.show', 'uses' => 'StudyLevelsController@show'
    ]);
    Route::get('ниво-студија/{slug}/edit', [
        'as' => 'study-levels.edit', 'uses' => 'StudyLevelsController@edit'
    ]);
});

/**
 * PUBLIC StudyLevels Route
 */
Route::get('ниво-студија', [
    'as' => 'study-levels.all', 'uses' => 'StudyLevelsController@all'
]);
Route::get('ниво-студија/{slug}', [
    'as' => 'study-levels.showOne', 'uses' => 'StudyLevelsController@showOne'
]);