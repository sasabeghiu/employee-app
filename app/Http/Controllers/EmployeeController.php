<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    public function store(Request $request)
    {
        $employee = new Employee([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile')
        ]);
        $employee->save();

        return response()->json($employee, 201);
    }

    public function show($id)
    {
        $existingEmployee = Employee::find($id);

        if ($existingEmployee) {
            return response()->json($existingEmployee);
        }

        return response()->json("Employee not found", 404);
    }

    public function update(Request $request, $id)
    {
        $existingEmployee = Employee::find($id);

        if ($existingEmployee) {
            $existingEmployee->update($request->all());
            return response()->json($existingEmployee, 200);
        }

        return response()->json("Employee not found", 404);
    }

    public function destroy($id)
    {
        $existingEmployee = Employee::find($id);

        if ($existingEmployee) {
            $existingEmployee->delete();
            return response()->json(null, 204);
        }

        return response()->json("Employee not found", 404);
    }
}
