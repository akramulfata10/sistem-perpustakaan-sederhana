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
                    <h4>Create Books Category
                        <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm float-end">
                            Back to category</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/category') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Books Category</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                placeholder="name">
                            @error('name')
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
