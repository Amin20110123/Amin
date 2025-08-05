@extends('admin.index')

@section('title', 'Course Details')

@section('content_header')
    <h4>Course Details</h4>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <strong>{{ $course->title }}</strong>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> Orqaga
        </a>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $course->id }}</p>
        <p><strong><Img:srcset></Img:srcset>:</strong> {{ $course->img }}</p>
        <p><strong>Title:</strong> {{ $course->title }}</p>
        <p><strong>Description:</strong> {{ $course->description }}</p>
        <p><strong>Icon:</strong> {{ $course->icon }}</p>
    </div>
</div>
@endsection