@extends('admin.index')

@section('title', __('content.edit_users'))

@section('content_header')
    <h4>{{ __('content.edit_users') }}</h4>
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
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
                    {{--           Uz             --}}
                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                        <div class="form-group">
                            <label for="title">User name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name..." value="{{ $user->name }}" >
                        </div>
                        <div class="form-group">
                            <label for="title">email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email..." value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password..." minlength="8">
                        </div>
                        <div class="form-group">
                            <label for="title">Password Confirm</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password...">
                        </div>
                    </div>
                    {{--           Oz             --}}
{{--                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="exampleInputEmail1">{{ __('menu.title_oz') }}</label>--}}
{{--                            <input class="form-control" name="title_oz">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <button type="submit" class="btn btn-primary btn-sm float-right">&check; {{ __('content.save') }}</button>
            </div>
            <!-- /.card -->
        </div>
    </form>
@stop
