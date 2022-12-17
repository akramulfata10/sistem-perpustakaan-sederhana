@extends('admin.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card-header">
                    <h4>Halaman Peminjaman
                        <a href="{{ url('admin/rentlog/create') }}" class="btn btn-primary btn-sm float-end">Create to
                            Peminjaman</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Waktu Peminjaman</th>
                                <th scope="col">waktu Kembalikan</th>
                                <th scope="col">waktu pasti kembalikan </th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rentlogs as $rentlog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rentlog->book->title }}</td>
                                    <td>{{ $rentlog->waktu_pinjam }}</td>
                                    <td>{{ $rentlog->waktu_kembalikan }}</td>
                                    <td>{{ $rentlog->waktu_pasti_kembalikan }}</td>
                                    <td>
                                        <a href="/admin/rentlog/{{ $rentlog->id }}/edit"
                                            class="badge bg-warning text-decoration-none"><span data-feather="edit">
                                                Edit</span></a>
                                        <form action="/admin/rentlog/{{ $rentlog->id }}" method="POST" class="d-inline">
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
