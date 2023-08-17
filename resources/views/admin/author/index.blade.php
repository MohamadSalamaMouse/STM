@extends('admin.layouts.master')
@section('title')
    Author
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('Admin.author.create')}}" class="btn btn-primary" style="float:right">Add Author</a>
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
                            <th>Bio</th>
                            <td>Created_At</td>
                            <td>image</td>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($authors as $author)
                            <tr>
                                <td>{{$author->name}}</td>
                                <td>{{$author->bio}}</td>
                                <td>{{$author->created_at}}</td>
                                <td><img src="{{asset('images/'.$author->image)}}" width="200px" height="200px" alt="Author Image"></td>
                                <td>
                                    <a href="{{route('Admin.author.edit',$author)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('Admin.author.destroy',$author)}}" method="POST" style="display:inline">
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
