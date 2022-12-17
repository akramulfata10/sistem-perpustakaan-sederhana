@extends('admin.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header">
                    <h4>Create Peminjaman
                        <a href="{{ url('admin/rentlog') }}" class="btn btn-primary btn-sm float-end">
                            Back to peminjaman</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/rentlog/' . $rentlog->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="Book" class="form-label">Book Name</label>
                            <select class="form-select" name="book_id">
                                @foreach ($books as $book)
                                    @if (old('book_id', $book->book_id) == $book->id)
                                        <option value="{{ $book->id }}" selected>{{ $book->title }}</option>
                                    @else
                                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('book')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Waktu Pinjam</label>
                            <input type="date" name="waktu_pinjam" class="form-control" id="exampleFormControlInput1"
                                placeholder="waktu_pinjam" value="{{ old('waktu_pinjam', $rentlog->waktu_pinjam) }}">
                            @error('waktu_pinjam')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">waktu kembalikan</label>
                            <input type="date" name="waktu_kembalikan" class="form-control" id="exampleFormControlInput1"
                                placeholder="waktu_kembalikan"
                                value="{{ old('waktu_kembalikan', $rentlog->waktu_kembalikan) }}">
                            @error('waktu_kembalikan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">waktu pasti kembalikan</label>
                            <input type="date" name="waktu_pasti_kembalikan" class="form-control"
                                id="exampleFormControlInput1" placeholder="waktu_pasti_kembalikan"
                                value="{{ old('waktu_pasti_kembalikan', $rentlog->waktu_pasti_kembalikan) }}">
                            @error('waktu_pasti_kembalikan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
