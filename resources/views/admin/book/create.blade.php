@extends('admin.layouts.master')
@section('title')
    Add Book
@endsection
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Book</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('Admin.book.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">

                        </div>
                        <div class="form-group">
                            <label for="description">price</label>
                            <input type="number" class="form-control" id="description" placeholder="Enter price" name="price">

                        </div>
                        <div class="form-group">
                            <label for="">Author</label><br>
                            <select class="form-control" name="author_id">
                                @foreach($authors as $author)
                                    <option value="{{$author->id}}">{{$author->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Category</label><br>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach

                            </select>
                        </div>
                        <input type="file" name="cover">

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
@endsection
