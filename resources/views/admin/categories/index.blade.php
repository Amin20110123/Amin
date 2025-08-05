@extends('admin.index')

@section('title', 'Categories')

@section('content_header')
    <h4>Categories</h4>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <!-- Card Header -->
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">Category List</h3>
                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Yaratish
                </a>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th style="width: 200px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->box_icon }}</td>
                            <td>{{ $category->box_title }}</td>
                            <td>{{ $category->box_description }}</td>
                            <td class="d-flex" style="gap: 5px;">
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-outline-primary">
                                    Edit
                                </a>
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-outline-success">
                                    Show
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        Delete
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