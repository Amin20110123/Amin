@extends('admin.index')

@section('title', ('course.edit'))

@section('content_header')
    <h4>{{ ('course.edit') }}</h4>
@stop

@section('content')
    <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
        @csrf()
        @method('PUT')
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">UZ</a>
                    </li>
                </ul>
            </div>
            
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                    <!--           Uz             -->
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}" required>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $course->description }}" required>
                            <span class="text-danger"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm float-right">save</button>
            </div>
            <!-- /.card -->
        </div>
    </form>
@stop