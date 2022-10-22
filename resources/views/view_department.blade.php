@extends('layouts.admin')

@section('content')
<div class="container">
      <div class="row">
      <!-- <div class="col-lg-3 col-md-3"> -->
              <!-- sidebar -->
                <!-- @include('sidebaradmin') -->
              <!-- sidebar -->
    <!-- </div> -->
          <div class="col-lg-9 col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th>Department ID</th>
                        <!-- return view controller/model -->
                        <td>{{ $department['id'] }}</td>
                    </tr>
                    <tr>
                        <th>Department Code</th>
                        <!-- return view controller/model -->
                        <td>{{ $department['dept_code'] }}</td>
                    </tr>
                    <tr>
                        <th>Department Name</th>
                        <!-- return view controller/model -->
                        <td>{{ $department['dept_name'] }}</td>
                    </tr>
                    <tr>
                        <th>Department Contact Number</th>
                        <!-- return view controller/model -->
                        <td>{{ $department['dept_contactNo'] }}</td>
                    </tr>
                    <tr>
                        <th>Department Email</th>
                        <!-- return view controller/model -->
                        <td>{{ $department['dept_email'] }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <a href="/edit/department/{{ $department['id'] }}" class="btn btn-warning btn-md ">Edit</a>
                        <a href="/delete/department/{{ $department['id'] }}" class="btn btn-danger btn-md">Delete</a>
                        </td>
                    </tr>
                </table>
          </div>
      </div>
    </div>
@endsection