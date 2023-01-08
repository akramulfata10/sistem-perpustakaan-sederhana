@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Buku</th>
                                    <th scope="col">Nama Peminjam</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Waktu Peminjaman</th>
                                    <th scope="col">waktu Kembalikan</th>
                                    <th scope="col">waktu pasti kembalikan </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjamans as $peminjaman)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $peminjaman->book->title ?? 'None' }}</td>
                                        <td>{{ $peminjaman->name_peminjam }}</td>
                                        <td>{{ $peminjaman->status == '1' ? 'dikembalikan' : 'dipinjam' }}</td>
                                        <td>{{ $peminjaman->waktu_pinjam }}</td>
                                        <td>{{ $peminjaman->waktu_kembalikan }}</td>
                                        <td>{{ $peminjaman->waktu_pasti_kembalikan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
