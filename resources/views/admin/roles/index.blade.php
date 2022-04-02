@extends('admin.index')

@section('title', 'Roles')

@section('content_header')
    <h4>Roles</h4>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right">
                            <span class="fas fa-fw fa-plus"></span>Янги яратиш
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Role</th>
                            <th>Slug</th>
                            <th>Permissions</th>
                            <th>Tools</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $key => $role)
                            <tr>
                                <td width="50px">{{ ++$key }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->slug }}</td>
                                <td>
                                    @if($role->permissions != null)
                                        @foreach($role->permissions as $key => $permission)
                                            <span class="badge badge-secondary">
                                                {{ $permission->slug }}
                                            </span>
                                        @endforeach
                                    @endif
                                </td>
                                <td width="150px">
                                    <form action="{{ route('roles.destroy',  $role->id) }}" method="post"
                                          onsubmit="return confirm('Siz rostdan ham ushbu ma\'lumotni o\'chirishni xoxlaysizmi ?')">
                                        <a href="{{ route('roles.show',  $role->id) }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('roles.edit',  $role->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <span class="fas fa-fw fa-trash-alt"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
