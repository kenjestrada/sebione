@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          <div class="col-lg-9 col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th>Department ID</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th>Department Code</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th>Department Name</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th>Department Contact Number</th>
                        <!-- return view controller/model -->
                        <td>{{  }}</td>
                    </tr>
                    <tr>
                        <th>Department Email</th>
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