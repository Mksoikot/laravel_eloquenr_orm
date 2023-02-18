@extends('backend.layout.master')
@section('title', 'Category Create')
@section('content')
    <div class="row">
{{-- option 1 --}}
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
        <div class="col-md-6">
            {{-- <h1>Laravel Eloquent ORM</h1> --}}
            <h3>Create Categoty</h3>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="name">Category Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Category Description">
                </div>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
            </form>
        </div>
    </div>
@endsection
