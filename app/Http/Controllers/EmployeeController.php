<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class EmployeeController extends Controller
{
    public function ShowEmployees()
    {
        $employees = DB::table('employees')->Paginate(5);
        return view('employees', ['data' => $employees]);
    }

    public function EmployeeInfo(string $id)
    {
        $employees = DB::table('employees')->get()->where('id', $id);
        return view('Employee-Information', ['data' => $employees]);
    }


public function addEmployee(Request $req)
{
    // 🔒 Step 1: Validate incoming request
    // $req->validate([
    //     'name'   => 'required|string|max:255',
    //     'email'  => 'required|email|unique:employees,email',
    //     'age'    => 'required|integer|min:18|max:65',
    //     'city'   => 'required|string|max:100',
    //     'salary' => 'required|numeric|min:0',
    // ]);

    // ✅ Step 2: Insert data into database
    $inserted = DB::table('employees')->insert([
        'name'   => $req->name,
        'email'  => $req->email,
        'age'    => $req->age,
        'city'   => $req->city,
        'salary' => $req->salary,
    ]);

    // 🔁 Step 3: Redirect with message
    if ($inserted) {
        return redirect()->route('home')->with([
            'message' => 'Employee added successfully!',
            'icon' => 'success'
        ]);
    } else {
        return redirect()->back()->with([
            'message' => 'Employee not added!',
            'icon' => 'error'
        ]);
    }
}


    public function delEmployee(string $id)
    {
        $employees = DB::table('employees')
            ->where('id', $id)
            ->delete();
        if ($id) {
            return redirect()->route('home')->with([
                'message' => 'Employee Deleted Successfully!',
                'icon' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'Employee Does not Updated!',
                'icon' => 'error'
            ]);
        }
    }

    public function delAllEmployee()
    {
        $employees = DB::table('employees')
            ->truncate();

            if($employees){
                return redirect()->route('home')
                    ->with([
                        'message' => 'Employees removed Successfully',
                        'icon' => 'success'
                    ]);
            }
    }


    public function updatepage(string $id)
    {
        $employees = DB::table('employees')->find($id);
        return view('Employee-update', ['data' => $employees]);
    }

    public function UpdateEmployee(Request $req, $id)
    {
        $updated = DB::table('employees')
            ->where('id', $id)
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'age' => $req->age,
                'city' => $req->city,
                'salary' => $req->salary,

            ]);
        if ($updated) {
            return redirect()->route('home')->with([
                'message' => 'Employee Updated Successfully!',
                'icon' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'Employee Does not Updated!',
                'icon' => 'error'
            ]);
        }
    }
}
