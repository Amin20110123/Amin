@extends('admin.index')

@section('title', __('content.create_news'))

@section('content_header')
    <h4>{{ __('content.create_roles') }}</h4>
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
    <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="title">Role name</label>
                            <input class="form-control" name="role_name" id="role_name" placeholder="Role name..." value="{{ old('role_name') }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Role slug</label>
                            <input class="form-control" name="role_slug" id="role_slug" placeholder="Role slug..." value="{{ old('role_slug') }}">
                        </div>
                        <div class="form-group">
                            <label for="roles_permissions">Add Permissions</label>
                            <input type="text" data-role="tagsinput" class="form-control" name="roles_permissions" id="roles_permissions" placeholder="roles_permissions..." value="{{ old('roles_permissions') }}">
                        </div>
                    </div>
                    <!--           Oz             -->
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
<script>
</script>
@section('adminlte_js')
    <script src="{{ asset('vendor/bootstrap-tagsiput/bootstrap-tagsinput.js')  }}"></script>

    <!--  now working   -->
    <script>
        $(document).ready(function () {
           $('#role_name').keyup(function (e) {
              var str = $('role_name').val();
              str = str.replace(/\W+(?!$)/g, '-').toLowerCase();
              $('#role_slug').val(str);
              $('#role_slug').attr('placeholder', str);
           });
        });
    </script>
@stop
