<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Departments;
use RealRashid\SweetAlert\Facades\Alert;

class CRUDController extends Controller
{
    public function index(){
        $department = Departments::all();
        return View('welcome',compact('department'));
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function addEmployee(){
        $departmentName = Departments::all();
        return View ('add_employee',compact('departmentName'));
    }

    public function createEmployee(Request $request){
        $departmentName = Departments::all();
        // SYNTAX
        // $variablename->model fillablename = $request->input('input name in blade file');
        $employee = new Employees;
        $employee->emp_fname = $request->input('emp_fname');
        $employee->emp_lname = $request->input('emp_lname');
        $employee->dept_id = $request->input('dept_id');
        $employee->emp_contactNo = $request->input('emp_contactNo');
        $employee->emp_email = $request->input('emp_email');
        
        if($request->hasFile('emp_pic')){
            $file = $request->file('emp_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('employees',$filename);
            $employee->emp_pic = $filename;
        }
        $employee->save();

        Alert::success('Details Successfully Added!', '');

        return View ('add_employee',compact('departmentName'));
    }

    public function addDepartment(){
        return View('add_department');
    }

    public function createDepartment(Request $request){

        //departments from mysql table>child table
        $request -> validate([
            'dept_code' => 'required|unique:departments,dept_code',
            'dept_name' => 'required|unique:departments,dept_name',
            'dept_email' => 'unique:departments,dept_email',
        ]
        );

        $department = new Departments;
        $department->dept_code = $request->input('dept_code');
        $department->dept_name = $request->input('dept_name');
        $department->dept_contactNo = $request->input('dept_contactNo');
        $department->dept_email = $request->input('dept_email');
        $department->save();

        Alert::success('Details Successfully Added!', '');

        return View('add_department');
    }

    public function viewDepartmentList(){
        $departmentList = Departments::all();
        return View ('departmentlist',compact('departmentList'));
    }

    public function viewEmployeeList(){
        $employeeList = Employees::all();
        return View ('employeelist',compact('employeeList'));
    }

    // $id is from web route / Departments from model / return view name of file blade php 
    // / compact to save department and id variable
    public function viewSingleDepartment($id){
        $department = Departments::find($id);
        return View ('view_department',compact('department', 'id'));
    }

    // $dept_id & $id is from web route / Employees/Departments from model / return view name of file blade php 
    // / compact to save department,employee,dept_id, and id variable
    public function viewSingleEmployee($dept_id,$id){
        $department = Departments::find($dept_id);
        $employee = Employees::find($id);
        return View ('view_employee',compact('department','employee', 'dept_id', 'id'));
    }

    public function editDepartment($id){
        $department = Departments::find($id);
        return View ('update_department',compact('department', 'id'));
    }

    public function updateDepartment(Request $request, $id){
        // SYNTAX
        // $variablename->model fillablename = $request->input('input name in blade file');
        $department = Departments::find($id);
        $department->dept_code=$request->dept_code;
        $department->dept_name=$request->dept_name;
        $department->dept_contactNo=$request->dept_contactNo;
        $department->dept_email=$request->dept_email;
        echo $department->save();

        Alert::success('Details Successfully Updated!', '');

        return View ('update_department',compact('department', 'id'));
    }

    public function editEmployee($id){
        $employee = Employees::find($id);
        $departmentName = Departments::all();
        return View ('update_employee',compact('employee', 'id', 'departmentName'));
    }

    public function updateEmployee(Request $request, $id){

        // SYNTAX
        // $variablename->model fillablename = $request->input('input name in blade file');
        $departmentName = Departments::all();
        $employee = Employees::find($id);
        $employee->emp_fname=$request->emp_fname;
        $employee->emp_lname=$request->emp_lname;
        $employee->dept_id=$request->dept_id;
        $employee->emp_pic=$request->emp_pic;
        $employee->emp_contactNo=$request->emp_contactNo;
        $employee->emp_email=$request->emp_email;

        if($request->hasFile('emp_pic')){
            $file = $request->file('emp_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('employees',$filename);
            $employee->emp_pic = $filename;
        }

        echo $employee->save();

        Alert::success('Details Successfully Updated!', '');

        return View ('update_employee',compact('employee', 'id', 'departmentName'));
    }

    public function deleteDepartment($id){
        $department = Departments::find($id);

        if($department != null){
            $department->delete();
            Alert::success('Deleted Successfully!', '');
        }
        
        $departmentList = Departments::all();
     
        return View ('departmentlist',compact('departmentList'));
    }

    public function deleteEmployee($id){
        $employee = Employees::find($id);

        if($employee != null){
            $employee->delete();
            Alert::success('Deleted Successfully!', '');
        }
        
        $employeeList = Employees::all();
     
        return View ('employeelist',compact('employeeList'));
    }
}
