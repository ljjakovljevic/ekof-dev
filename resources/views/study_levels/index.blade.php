@extends('layouts.master')
@section('title', trans('Study Levels'))

@section('content')
<h2>{{ trans('Study Levels') }}</h2>
<hr>
<ul class="list-group">
    @foreach($studyLevels as $level)
        <li class="list-group-item">
            <a href="ниво-студија/{{ $level->slug }}">{{ $level->title }}</a>
        </li>
    @endforeach
</ul>
@stop