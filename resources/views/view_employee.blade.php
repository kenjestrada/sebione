@extends('layouts.app')

@section('content')
<div class="container ">
      <div class="row">
          <div class="col-lg-9 col-md-9">
                <table class="table table-bordered ">
                    <tr>
                        <th>Employee ID</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th>Employee Picture</th>
                        <!-- return view controller/model -->
                        <td><img src="" class="img-thumbnail" alt="..."> {{  }}</td>
                    </tr>
                    <tr>
                        <th>Employee First Name</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th>Employee Last Name</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th>Department ID</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th>Employee Contact Number</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th>Employee Email</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <a href="" class="btn btn-warning btn-md ">Edit</a>
                        <a href="" class="btn btn-danger btn-md">Delete</a>
                        </td>
                    </tr>
                </table>
          </div>
      </div>
    </div>
@endsection