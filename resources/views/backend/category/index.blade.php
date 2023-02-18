@extends('backend.layout.master')
@section('title','Category Show List')
@section('content')
        <div class="row">
            <div class="col-md-6">
                {{-- <h1>Laravel Eloquent ORM</h1> --}}
                <h3>Create List Show</h3>
                <a class="btn btn-info btn-sm" href="{{route('categories.create')}}">+ Create Categories</a><br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                <a href="{{route('categories.show',$category->id)}}" class="btn btn-primary btn btn-sm">Show</a>
                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info btn btn-sm">Edit</a>
                                <form class="d-inline-block" action="{{route('categories.destroy',$category->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure to delete data?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
