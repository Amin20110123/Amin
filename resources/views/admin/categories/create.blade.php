@extends('admin.index')

@section('title', 'Kategoriya Yaratish')

@section('content_header')
    <h4>Yangi Kategoriya Qo‘shish</h4>
@stop

@section('content')
<form action="{{ route('categories.store') }}" method="post">
    @csrf

    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                       href="#custom-tabs-three-home" role="tab"
                       aria-controls="custom-tabs-three-home" aria-selected="true">UZ</a>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <!-- Uzbek tili bo‘limi -->
                <div class="tab-pane fade show active" id="custom-tabs-three-home"
                     role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

                    <div class="form-group">
                        <input class="form-control" name="box_title" placeholder="title">
                        <span class="text-danger">
                            @error('box_title') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="box_description" placeholder="description">
                        <span class="text-danger">
                            @error('box_description') {{ $message }} @enderror
                        </span>
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-sm float-right">Saqlash</button>
        </div>
    </div>
</form>
@stop