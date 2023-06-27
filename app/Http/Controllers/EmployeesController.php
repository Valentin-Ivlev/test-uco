<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{

    public function index()
    {
        $records = Employees::select('employees.*')
            ->where('name', 'not like', "%Prof.%")
            ->orderByDesc("username")
            ->offset(0)
            ->limit(10)
            ->get();

        return view('employees.index')->with('records', $records);
    }

    public function editEmployeesForm(Employees $employees)
    {
        return view('employees.edit', compact('employees'));
    }

    public function deleteEmployees(Request $request)
    {

        $id = $request->route('id');
        Employees::where('id', $id)->delete();

        return true;
    }


    public function updateEmployeesForm(Employees $employees, Request $request)
    {

        $id = $request->route('id');
        $name = $request->input('name');
        $email = $request->input('email');

        $validatedData = $request->validate([
            'name' => 'required|min:6|max:20',
            'email' => 'required|email:rfc,dns',
        ]);

        Employees::where('id', $id)
            ->update([
                'name' => $name,
                'email' => $email
            ]);

        return redirect('/');

    }
}
