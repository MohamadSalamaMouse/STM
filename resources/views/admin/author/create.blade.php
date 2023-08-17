@extends('admin.layouts.master')
@section('title')
    Add Author
@endsection
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Author</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('Admin.author.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">name</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title" name="name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter Bio" name="bio">

                        </div>

                        <input type="file" name="image">

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
@endsection
