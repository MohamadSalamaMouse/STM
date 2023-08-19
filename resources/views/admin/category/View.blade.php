@extends('admin.layouts.master')
@section('title')
    Category View
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">


                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <td>Created_At</td>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$category->title}}</td>
                                <td>{{$category->description}}</td>
                                <td>{{$category->created_at}}</td>

                            </tr>






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
