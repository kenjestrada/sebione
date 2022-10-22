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
                    <th scope="col">Department Code</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Department Contact Number</th>
                    <th scope="col">Department Email</th>
                    <th scope="col">Details</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>    
                </thead>
                <!-- $departmentList is from UdemyController variable / id,dept_code... is from Department Model -->
                    @foreach($departmentList as $key=> $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->dept_code }}</td>
                        <td>{{ $value->dept_name }}</td>
                        <td>{{ $value->dept_contactNo }}</td>
                        <td>{{ $value->dept_email }}</td>
                        <td><a href="/view/department/{{ $value['id'] }}" class="btn btn-info btn-sm btn-block">Details</a></td>
                        <td><a href="/edit/department/{{ $value['id'] }}" class="btn btn-warning btn-sm btn-block">Edit</a></td>
                        <td><a href="/delete/department/{{ $value['id'] }}" class="btn btn-danger btn-sm btn-block">Delete</a></td>
                    </tr>
                    @endforeach
                </table>

                <!-- //paginate -->
                {{ $departmentList->links() }}
          </div>
      </div>
    </div>
@endsection