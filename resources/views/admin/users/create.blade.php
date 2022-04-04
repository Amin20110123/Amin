@extends('admin.index')

@section('title', __('content.create_news'))

@section('content_header')
    <h4>{{ __('content.create_news') }}</h4>
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

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
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
                            <input class="form-control" name="name" id="name" placeholder="Name..." value="{{ old('name') }}">
                            {{--                            <span class="text-danger">{{ $errors->first('title_uz') }}</span>--}}
                        </div>
                        <div class="form-group">
                            <label for="title">email</label>
                            <input class="form-control" name="email" id="email" placeholder="Email..." value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password...">
                        </div>
                        <div class="form-group">
                            <label for="title">Password Confirm</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password...">
                        </div>
                        <div class="form-group">
                            <label for="role">Select Role</label>
                            <select class="role form-control" name="role" id="role">
                                <option value="">Select Role...</option>
                                @foreach($roles as $key => $role)
                                    <option data-role-id="{{ $role->id }}" data-role-slug="{{ $role->slug }}" value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="permissions_box">
                            <label for="roles">Select Permissions</label>
                            <div id="permissions_checkbox_list">
                            </div>
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

@section('adminlte_js')
    <script>
        $(document).ready(function () {
            var permissions_box = $('#permissions_box');
            var permissions_check_list = $('#permissions_checkbox_list');

            permissions_box.hide();

            $('#role').on('change', function () {
                var role_id = $("#role option:selected").attr('data-role-id');
                var role_slug = $("#role option:selected").attr('data-role-slug');

                // permissions_checkbox_list.empty();

                $.ajax({
                    url: "/admin/users/create",
                    method: 'get',
                    dataType: 'json',
                    data: {
                        role_id: role_id,
                        role_slug: role_slug
                    }
                }).done(function (data) {

                    permissions_box.show();

                    $.each(data, function (index, element) {
                        $(permissions_check_list).append(
                             '<div class="custom-control custom-checkbox">' +
                                 '<input class="custom-control-input" type="checkbox" name="permissions[]" id="'+ element.slug +'" value="' + element.id +'"/>' +
                                 '<label class="custom-control-label" for="'+ element.slug +'">'+ element.name + '</label>' +
                             '</div>'
                        );
                    })
                })
            })
        });
    </script>
@stop


