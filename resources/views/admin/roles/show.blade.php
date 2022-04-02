@extends('admin.index')

@section('title', 'Roles')

@section('content_header')
    <h4>Roles Show</h4>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <h3>Name: {{ $role->name }}</h3>
                    <h4>Email: {{ $role->slug }}</h4>
                </h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Permissions</h5>
                <p class="card-text">
                    ...
                </p>
            </div>
            <div class="card-footer">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection






