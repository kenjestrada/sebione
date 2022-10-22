@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          <div class="col-lg-9 col-md-9">
                <div class="card">
                    <div class="card-header"><h4>Update Employee</h4></div>
                    <div class="card-body">

                    <form method="post" action="" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Employee Picture(100 x 100)</label>
                        <div class="col-sm-10">
                        <img src="" class="img-thumbnail" alt="...">
                        <input type="file" name="" class="form-control-file btn-md mt-2" placeholder="Image" value="">
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Employee First Name</label>
                        <div class="col-sm-10">
                        <input type="text" name=""class="form-control input-sm" placeholder="Code" value="" required>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Employee Last Name</label>
                        <div class="col-sm-10">
                        <input type="text" name=""class="form-control input-sm" placeholder="Name" value="" required>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Department</label>
                            <div class="col-sm-10">
                                <select name="" class="form-control input-sm" required>
                                <option value="" selected="selected">{{  }}</option>
                                    @foreach( as $key=> $value)
                                    <option value="{{ $value->id }}">
                                        {{ }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Employee Contact Number</label>
                        <div class="col-sm-10">
                        <input type="text" name=""class="form-control input-sm" placeholder="Email" value="{{  }}">
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Employee Email</label>
                        <div class="col-sm-10">
                        <input type="text" name=""class="form-control input-sm" placeholder="Email" value="{{  }}">
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