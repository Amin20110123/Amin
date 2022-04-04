@extends('admin.index')

@section('title', 'Users')

@section('content_header')
    <h4>Users</h4>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">
                            <span class="fas fa-fw fa-plus"></span>Янги яратиш
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Permissions</th>
                            <th>Tools</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $key => $user)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->roles->isNotEmpty())
                                        @foreach($user->roles as $role)
                                            <span class="badge badge-secondary">
                                            {{ $role->name }}
                                        </span>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    @if($user->roles->isNotEmpty())
                                        @foreach($user->permissions as $permission)
                                            <span class="badge badge-secondary">
                                                {{ $permission->name }}
                                            </span>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('users.destroy',  $user->id) }}" method="post"
                                          onsubmit="return confirm('Siz rostdan ham ushbu ma\'lumotni o\'chirishni xoxlaysizmi ?')">
                                        <a href="{{ route('users.show',  $user->id) }}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('users.edit',  $user->id) }}">
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






