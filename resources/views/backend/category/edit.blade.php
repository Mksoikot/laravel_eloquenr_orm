@extends('backend.layout.master')
@section('title','Category Edit')
@section('content')
        <div class="row">
            <div class="col-md-6">
                {{-- <h1>Laravel Eloquent ORM</h1> --}}
                <h3>Edit Categoty</h3>
            <form action="{{route('categories.update',$category->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" value="{{$category->name}}" name="name" placeholder="Category Name">
                </div>
                <div class="form-group">
                    <label for="name">Category Description</label>
                    <input type="text" class="form-control" id="description" value="{{$category->description}}" name="description" placeholder="Category Description">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
            </form>
            </div>
        </div>
@endsection
