@extends('admin.index')

@section('title', __('content.create_news'))

@section('content_header')
    <h4>{{ __('content.create_news') }}</h4>
@stop

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote-bs4.min.css')  }}">
    <style>
        .summer{

        }
    </style>
@stop

@section('content')
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf()
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">UZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">O'Z</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                    <!--           Uz             -->
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                        <div class="form-group">
                            <label for="title">{{ __('menu.title_uz') }}</label>
                            <input class="form-control" name="title_uz">
                            <span class="text-danger">{{ $errors->first('title_uz') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ __('menu.description_uz') }}</label>
                            <label for="summernote"></label>
                            <textarea class="summernote summer" name="description_uz">
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="body">{{ __('menu.body_uz') }}</label>
                            <textarea class="summernote" name="body_uz">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>{{ __('menu.image') }}</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input class="form-control" type="date" name="dateTime" id="date">
                            <span class="text-danger">{{ $errors->first('dateTime') }}</span>
                        </div>
                    </div>
                    <!--           Oz             -->
                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('menu.title_oz') }}</label>
                            <input class="form-control" name="title_oz">
                        </div>
                        <div class="form-group">
                            <label>{{ __('menu.description_oz') }}</label>

                            <textarea  class="textarea form-control summernote" placeholder="Place some text here"
                                       style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                       name="description_oz"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ __('menu.content_oz') }}</label>
                            <textarea  class="textarea form-control summernote" placeholder="Place some text here"
                                       style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                       name="body_oz"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm float-right">&check; {{ __('content.save') }}</button>
            </div>
            <!-- /.card -->
        </div>
    </form>
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/summernote/summernote-bs4.min.js')  }}"></script>
    <script>
        $(function () {
            // Summernote
            $('.summernote').summernote()
        })
    </script>
@stop
