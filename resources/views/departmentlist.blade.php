@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          
          <div class="col-lg-9 col-md-9">
                <table class="table table-bordered">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Department Code</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Department Contact Number</th>
                    <th scope="col">Department Email</th>
                    <th scope="col">Details</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>    
                </thead>
                <!-- $departmentList is from UdemyController variable / id,dept_code... is from Department Model -->
                    @foreach( as $key=> $value)
                    <tr>
                        <td>{{ $value-> }}</td>
                        <td>{{ $value-> }}</td>
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