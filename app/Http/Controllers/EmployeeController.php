<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//CRUD
class EmployeeController extends Controller
{
    //
    public function index()
    {

        // $employee = DB::table('employee')->get();
        // $employee = DB::select('select * from employee;');
        // $employee = Employee::where('fname', 'like', 'ya%')->get();
        $employee = Employee::all();
        return view('employee/index', compact('employee'));
    }

    public function show($ssn)
    {
        $emp = Employee::findOrFail($ssn);
        return view('employee/show', compact('emp'));
    }

    public function create()
    {
        return view('employee/create');
    }

    public function store(Request $request)
    {
        Employee::create($request->except('_method', '_token', 'ssn'));
        return redirect()->to(route('employee.show', [$request->ssn]));
    }

    public function edit($ssn)
    {
        $emp = Employee::findOrFail($ssn);
        return view('employee/edit', compact('emp'));
    }

    public function update(Request $request)
    {
        Employee::where('ssn', $request->ssn)->update($request->except('_method', '_token', 'ssn'));
        return redirect()->to(route('employee.show', [$request->ssn]));
    }

    public function delete(Request $request)
    {
        $emp = Employee::findOrFail($request->ssn);
        $emp->delete();
        return redirect()->to(route('employee.index'));
    }
}
