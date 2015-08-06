@extends('layouts.admin-master')
@section('title', 'Create StudyType')@stop

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Create Study Type</h2>
            <hr>

            {!! Form::open(['route' => 'study-types.store']) !!}

            <!-- StudyLevel input -->
            <div class="form-group">
                <label for="study_level_id">Study Level</label>
                <select id="study_level_id" name="study_level_id" class="form-control">
                    <option value="">Select StudyLevel...</option>
                    @foreach($studyLevels as $level)
                    <option value="{{ $level->id }}">{{ $level->title }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Title input -->
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Description input -->
            <div class="form-group">
                {!! Form::label('desc', 'Description') !!}
                {!! Form::textarea('desc', null, ['class' => 'form-control', 'rows' => '10']) !!}
            </div>

            <!-- Active input -->
            <div class="form-group">
                <label for="active">Active</label>
                <input class="form-control" name="active" type="number" id="active">
            </div>

            <!-- Submit input -->
            <div class="form-group">
                {!! Form::submit('Create StudyLevel', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection