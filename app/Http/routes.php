<?php

Route::get('/', function () {
    flash()->success('Hello World!', 'Ovo je poruka...');
    return view('welcome');
});
