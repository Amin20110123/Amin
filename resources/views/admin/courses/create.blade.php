@extends('admin.index')

@section('title', __('content.create_news'))

@section('content_header')
    <h4>{{ __('content.create_news') }}</h4>
@stop

@section('content')
    <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
        @csrf()
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
                            <input class="form-control" name="title" placeholder='enter'>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input class="form-control" name="description" placeholder='enter'>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Image:</label>
                            <input type="file" name="image" accept="image/*">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm float-right">save</button>
            </div>
            <!-- /.card -->
        </div>
    </form>
@stop
