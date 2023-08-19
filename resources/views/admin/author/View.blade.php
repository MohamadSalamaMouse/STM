@extends('admin.layouts.master')
@section('title')
    Author View
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
                            <th>Bio</th>
                            <td>Created_At</td>
                            <td>image</td>


                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$author->name}}</td>
                                <td>{{$author->bio}}</td>
                                <td>{{$author->created_at}}</td>
                                <td><img src="{{asset('images/'.$author->image)}}" width="200px" height="200px" alt="Author Image"></td>

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
