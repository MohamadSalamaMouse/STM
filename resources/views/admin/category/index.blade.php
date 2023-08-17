@extends('admin.layouts.master')
@section('title')
    Categories
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('Admin.category.create')}}" class="btn btn-primary" style="float:right">Add Category</a>
                    @if(session('success'))
                        <h3 class="alert alert-success" >{{session('success')}}</h3>
                    @endif

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <td>Created_At</td>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->title}}</td>
                                <td>{{$category->description}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    <a href="{{route('Admin.category.edit',$category)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('Admin.category.destroy',$category)}}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach




                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


        </div>
        <!-- /.col -->
    </div>
@endsection
