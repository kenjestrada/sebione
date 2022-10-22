@extends('layouts.app')

@section('content')
<div class="container">

      <div class="row">
          
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
                    @foreach( as $key=> $value)
                    <tr>
                        <td>{{ $value-> }}</td>
                        <td><img src="{{ asset('employees/'.$value->emp_pic) }}"></td>
                        <td>{{ $value-> }}</td>
                        <td>{{ $value-> }}</td>
                        <td>{{ $value-> }}</td>
                        <td><a href="" class="btn btn-info btn-sm btn-block">Details</a></td>
                        <td><a href="" class="btn btn-warning btn-sm btn-block">Edit</a></td>
                        <td><a href="" class="btn btn-danger btn-sm btn-block">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
                
          </div>
      </div>
    </div>
@endsection