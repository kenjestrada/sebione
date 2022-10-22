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
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Employee Picture</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Details</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>    
                </thead>
                <!-- $employeeList is from UdemyController variable / id,emp_fname... is from Department Model -->
                    @foreach($employeeList as $key=> $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td><img src="{{ asset('employees/'.$value->emp_pic) }}"></td>
                        <td>{{ $value->emp_fname }}</td>
                        <td>{{ $value->emp_lname }}</td>
                        <td>{{ $value->dept_id }}</td>
                        <td><a href="/view/employee/{{ $value['dept_id'] }}/{{ $value['id'] }}" class="btn btn-info btn-sm btn-block">Details</a></td>
                        <td><a href="/edit/employee/{{ $value['id'] }}" class="btn btn-warning btn-sm btn-block">Edit</a></td>
                        <td><a href="/delete/employee/{{ $value['id'] }}" class="btn btn-danger btn-sm btn-block">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
                
                <!-- //paginate -->
                {{ $employeeList->links() }}
          </div>
      </div>
    </div>
@endsection