@extends('admin.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card-header">
                    <h4>books
                        <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Create to
                            category</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="/admin/category/{{ $category->id }}/edit"
                                            class="badge bg-warning text-decoration-none"><span data-feather="edit">
                                                Edit</span></a>
                                        <form action="/admin/category/{{ $category->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Are You Sure?')"> Delete<span
                                                    data-feather="x-circle"></button>
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
