@extends('admin.index')

@section('title', 'Questions')

@section('content_header')
    <h4>Questions</h4>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('questions.create') }}" class="btn btn-primary btn-sm float-right">
                            <span class="fas fa-fw fa-plus"></span>Yaratish
                        </a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="row">

                                        <a class="btn btn-outline-primary" href="{{ route('questions.edit', $item->id) }}">Edit</a>
                                        <a href="{{ route('questions.show', $item->id) }}" class="btn btn-outline-success">Show</a>

                                        <form action="{{ route('questions.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Danger</button>
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