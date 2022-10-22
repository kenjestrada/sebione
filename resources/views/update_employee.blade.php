@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          <div class="col-lg-9 col-md-9">
                <div class="card">
                    <div class="card-header"><h4>Update Employee</h4></div>
                    <div class="card-body">

                    <form method="post" action="/update/employee/{{ $employee['id'] }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Employee Picture(100 x 100)</label>
                        <div class="col-sm-10">
                        <img src="{{ asset('employees/'.$employee->emp_pic) }}" class="img-thumbnail" alt="...">{{ $employee->emp_pic }}
                        <input type="file" name="emp_pic" class="form-control-file btn-md mt-2" placeholder="Image" value="{{ $employee['emp_pic'] }}">
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Employee First Name</label>
                        <div class="col-sm-10">
                        <input type="text" name="emp_fname"class="form-control input-sm" placeholder="Code" value="{{ $employee['emp_fname'] }}" required>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Employee Last Name</label>
                        <div class="col-sm-10">
                        <input type="text" name="emp_lname"class="form-control input-sm" placeholder="Name" value="{{ $employee['emp_lname'] }}" required>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Department</label>
                            <div class="col-sm-10">
                                <select name="dept_id" class="form-control input-sm" required>
                                <option value="{{ $employee['dept_id'] }}" selected="selected">{{ $employee['dept_id'] }}</option>
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
                        <input type="text" name="emp_contactNo"class="form-control input-sm" placeholder="Email" value="{{ $employee['emp_contactNo'] }}">
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Employee Email</label>
                        <div class="col-sm-10">
                        <input type="text" name="emp_email"class="form-control input-sm" placeholder="Email" value="{{ $employee['emp_email'] }}">
                        </div>
                    </div><br>

                    <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-sm btn-primary mx-5">Update Employee</button>
                    </div> 

                    </form>

                    </div>
                </div>
          </div>
      </div>
    </div>
@endsection