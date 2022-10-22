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
            <div class="card">
                <div class="card-header"><h4>Add Employee</h4></div>
                    <div class="card-body">
    
                    <form method="post" action="{{route('createemployee') }}" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Employee Image(100 x 100)</label>
                            <div class="col-sm-10">
                            <input type="file" name="emp_pic" class="form-control-file btn-md mt-2" placeholder="Image">
                                    @if($errors -> has('emp_pic'))
                                    <div class="alert alert-danger" role="alert">
                                    {{$errors -> first('emp_pic') }}
                                    </div>
                                    @endif
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="emp_fname" class="form-control input-sm" placeholder="Enter Your First Name: " required>
                                    @if($errors -> has('emp_fname'))
                                    <div class="alert alert-danger" role="alert">
                                    {{$errors -> first('emp_fname') }}
                                    </div>
                                    @endif
                                </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="emp_lname" class="form-control input-sm" placeholder="Enter Your Last Name: " required>
                                    @if($errors -> has('emp_lname'))
                                    <div class="alert alert-danger" role="alert">
                                    {{$errors -> first('emp_lname') }}
                                    </div>
                                    @endif
                                </div>
                        </div><br>

                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Department</label>
                            <div class="col-sm-10">
                                <select name="dept_id" class="form-control input-sm" required>
                                <option value="-">-</option>
                                    @foreach($departmentName as $key=> $value)
                                    <option value="{{ $value->id }}">
                                        {{ $value->id.'. '.$value->dept_name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Employee Contact Number</label>
                                <div class="col-sm-10">
                                    <input type="number" name="emp_contactNo" class="form-control input-sm" placeholder="Enter Your Contact Number: ">
                                    @if($errors -> has('emp_contactNo'))
                                    <div class="alert alert-danger" role="alert">
                                    {{$errors -> first('emp_contactNo') }}
                                    </div>
                                    @endif
                                </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Employee Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="emp_email" class="form-control input-sm" placeholder="Enter Your Email: ">
                                    @if($errors -> has('emp_email'))
                                    <div class="alert alert-danger" role="alert">
                                    {{$errors -> first('emp_email') }}
                                    </div>
                                    @endif
                                </div>
                        </div><br>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-sm btn-primary mx-5">Add New Employee</button>
                        </div> 

                        </form>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection