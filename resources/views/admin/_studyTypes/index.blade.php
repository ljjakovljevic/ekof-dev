@extends('layouts.admin-master')

@section('content')
    <ul class="list-group">
        @foreach($studyTypes as $type)
            <li class="list-group-item">
                <a href="{{ $type->slug }}">{{ $type->title }}</a>
            </li>
        @endforeach
    </ul>
@stop