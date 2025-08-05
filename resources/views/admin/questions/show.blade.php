@extends('admin.index')

@section('content')
    <div class="card">
    <div class="card-header">
        <strong>Title:</strong> {{ $item->title }}
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $item->id }}</p>
        <p><strong>Description:</strong> {{ $item->description }}</p>
        
    </div>
</div>
@endsection