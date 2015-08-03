@extends('layouts.admin-master')

@section('content')
    <ul class="list-group">
        @foreach($studyLevels as $level)
            <li class="list-group-item">
                <a href="{{ $level->slug }}">{{ $level->title }}</a>
            </li>
        @endforeach
    </ul>
@stop
