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
                    <h4>Create books
                        <a href="{{ url('admin/books') }}" class="btn btn-primary btn-sm float-end">
                            Back to books</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/books') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Books Title</label>
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                                placeholder="title">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Books Status</label>
                            <input type="text" name="status" class="form-control" id="exampleFormControlInput1"
                                placeholder="status">
                            @error('status')
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
