@extends('layouts.admin')

@section('content')
<div class="container ">
      <div class="row">
      <!-- <div class="col-lg-3 col-md-3"> -->
              <!-- sidebar -->
                <!-- @include('sidebaradmin') -->
              <!-- sidebar -->
    <!-- </div> -->
          <div class="col-lg-9 col-md-9">
                <table class="table table-bordered ">
                    <tr>
                        <th>Employee ID</th>
                        <!-- return view controller/model -->
                        <td>{{ $employee['id'] }}</td>
                    </tr>
                    <tr>
                        <th>Employee Picture</th>
                        <!-- return view controller/model -->
                        <td><img src="{{ asset('employees/'.$employee->emp_pic) }}" class="img-thumbnail" alt="..."> {{ $employee->emp_pic }}</td>
                    </tr>
                    <tr>
                        <th>Employee First Name</th>
                        <!-- return view controller/model -->
                        <td>{{ $employee['emp_fname'] }}</td>
                    </tr>
                    <tr>
                        <th>Employee Last Name</th>
                        <!-- return view controller/model -->
                        <td>{{ $employee['emp_lname'] }}</td>
                    </tr>
                    <tr>
                        <th>Department ID</th>
                        <!-- return view controller/model -->
                        <td>{{ $employee['dept_id'].' - '.$department['dept_name'] }}</td>
                    </tr>
                    <tr>
                        <th>Employee Contact Number</th>
                        <!-- return view controller/model -->
                        <td>{{ $employee['emp_contactNo'] }}</td>
                    </tr>
                    <tr>
                        <th>Employee Email</th>
                        <!-- return view controller/model -->
                        <td>{{ $employee['emp_email'] }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <a href="/edit/employee/{{ $employee['id'] }}" class="btn btn-warning btn-md ">Edit</a>
                        <a href="/delete/employee/{{ $employee['id'] }}" class="btn btn-danger btn-md">Delete</a>
                        </td>
                    </tr>
                </table>
          </div>
      </div>
    </div>
@endsection