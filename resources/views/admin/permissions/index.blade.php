@extends('admin.index')

@section('title', 'Permissions')

@section('content_header')
    <h4>Permissions</h4>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm float-right">
                            <span class="fas fa-fw fa-plus"></span>Янги яратиш
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>12</td>
                            <td>asd</td>
                            <td>ddsd</td>
                            <td>-</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>12d</td>
                            <td>asd</td>
                            <td>ddasdsd</td>
                            <td>asd-</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>asd</td>
                            <td>ddsd</td>
                            <td>-</td>
                            <td>A</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection






