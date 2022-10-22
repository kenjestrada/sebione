@extends('layouts.app')

@section('content')
<div class="container">

    <div class ="row">
        <div class="col-lg-9 col-md-9">
            <div class="card">
                <div class="card-header"><h4>Add Department</h4></div>
                    <div class="card-body">
    
                    <form method="post" action="/create/department" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department Code</label>
                                <div class="col-sm-10">
                                    <input type="text" name="" class="form-control input-sm" placeholder="Enter Department Code: " required>
                                    @if($errors -> has(''))
                                    <div class="alert alert-danger" role="alert">
                                    {{$errors -> first('') }}
                                    </div>
                                    @endif
                                </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="" class="form-control input-sm" placeholder="Enter Department Name: " required>
                                    @if($errors -> has(''))
                                    <div class="alert alert-danger" role="alert">
                                    {{$errors -> first('') }}
                                    </div>
                                    @endif
                                </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department Contact Number</label>
                                <div class="col-sm-10">
                                    <input type="number" name="" class="form-control input-sm" placeholder="Enter Department Contact Number: ">
                                </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="" class="form-control input-sm" placeholder="Enter Department Email: ">
                                    @if($errors -> has(''))
                                    <div class="alert alert-danger" role="alert">
                                    {{$errors -> first('') }}
                                    </div>
                                    @endif
                                </div>
                        </div><br>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-sm btn-primary mx-5">Add New Department</button>
                        </div> 

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection