@extends('admin.index')

@section('title', ('category.edit'))

@section('content_header')
    <h4>{{ ('category.edit') }}</h4>
@stop

@section('content')
    <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
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
                    <!-- Uzbek tili uchun forma -->
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                        <div class="form-group">
                            <label for="box_title">Title</label>
                            <input type="text" class="form-control" id="box_title" name="box_title" value="{{ $category->box_title }}" required>
                        </div>

                        <div class="form-group">
                            <label for="box_description">Description</label>
                            <input type="text" class="form-control" id="box_description" name="box_description" value="{{ $category->box_description }}" required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm float-right">Save</button>
            </div>
        </div>
    </form>
@stop