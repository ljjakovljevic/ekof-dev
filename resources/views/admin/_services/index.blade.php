@extends('layouts.admin-master')
@section('title', 'Admin.Index')

@section('content')
    <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">
                <a href="{{ $service->slug }}">{{ $service->title }}</a>
            </li>
        @endforeach
    </ul>
@stop