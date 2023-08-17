@extends('admin.layouts.master')
@section('title')
    Edit Author
@endsection
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Author</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('Admin.author.update',$author)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">name</label>
                            <input type="text" class="form-control" id="title"  name="name" value="{{$author->name}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description"  name="bio" value="{{$author->bio}}">

                        </div>

                        <input type="file" name="image">
                        <img src="{{asset('images/'.$author->image)}}" width="150px" height="150px" alt="Author Image">

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
@endsection
