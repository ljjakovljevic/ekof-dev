@extends('layouts.master')
@section('title', trans('Services'))

@section('content')
    <h2>{{ trans('Services') }}</h2>
    <hr>
    <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">
                <a href="ниво-студија/{{ $service->slug }}">{{ $service->title }}</a>
            </li>
        @endforeach
    </ul>
@stop