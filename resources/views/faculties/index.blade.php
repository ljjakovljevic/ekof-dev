@extends('layouts.master')
@section('title', trans('Faculties'))

@section('content')
    <h2>{{ trans('Faculties') }}</h2>
    <hr>
    <ul class="list-group">
        @foreach($faculties as $faculty)
            <li class="list-group-item">
                <a href="факултет/{{ $faculty->slug }}">{{ $faculty->title }}</a>
            </li>
        @endforeach
    </ul>
@stop