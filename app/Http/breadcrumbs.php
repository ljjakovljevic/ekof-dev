<?php

// Home
Breadcrumbs::register('/', function($breadcrumbs) {
    $breadcrumbs->push(trans('Home'), route('home.index'));
});