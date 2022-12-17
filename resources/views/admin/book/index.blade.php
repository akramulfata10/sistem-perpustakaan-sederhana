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
                        <a href="{{ url('admin/books/create') }}" class="btn btn-primary btn-sm float-end">Create to
                            books</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->status }}</td>
                                    <td>
                                        <a href="/admin/books/{{ $book->id }}/edit"
                                            class="badge bg-warning text-decoration-none"><span data-feather="edit">
                                                Edit</span></a>
                                        <form action="/admin/books/{{ $book->id }}" method="POST" class="d-inline">
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
