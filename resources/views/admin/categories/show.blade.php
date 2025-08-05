@extends('admin.index')

@section('title', 'Category Details')

@section('content_header')
    <h4>Category Details</h4>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <strong>{{ $category->box_title }}</strong>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> Orqaga
        </a>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $category->id }}</p>
        <p><strong>Title:</strong> {{ $category->box_title }}</p>
        <p><strong>Description:</strong> {{ $category->box_description }}</p>
        <p><strong>Icon:</strong> {{ $category->box_icon }}</p>
    </div>
</div>
@endsection