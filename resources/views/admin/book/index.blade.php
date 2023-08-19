@extends('admin.layouts.master')
@section('title')
    Book
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('Admin.book.create')}}" class="btn btn-primary" style="float:right">Add Book</a>
                    @if(session('success'))
                        <h3 class="alert alert-success" >{{session('success')}}</h3>
                    @endif

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Cover</th>
                            <th>title</th>
                            <th>description</th>
                            <th>Created_At</th>
                            <th>Author ID</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td><img src="{{asset('images/book'.$book->cover)}}" width="100px" height="150px" alt="Author Image"></td>
                                <td>{{$book->title}}</td>
                                <td>{{$book->description}}</td>
                                <td>{{$book->created_at}}</td>
                                <td><a href="{{route('Admin.author.show',$book->author_id)}}">{{$book->author_id}}</a></td>
                                <td><a href="{{route('Admin.category.show',$book->category_id)}}">{{$book->category_id}}</a></td>
                                <td>
                                    @if($book->status)
                                        <p class="text-success">Borrowed</p>
                                    @else
                                        <p class="text-warning">Not Borrowed</p>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{route('Admin.book.edit',$book)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('Admin.book.destroy',$book)}}" method="POST" style="display:inline">
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
