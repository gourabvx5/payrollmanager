<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Employeeleave;
use App\Models\LeaveCategory;

class EmployeeController extends Controller
{
    public function register_page(){
        return view('employee.register');
    }

    public function create_employee(Request $request){
        $userdata = $request->validate([
            'name' => 'required ',
            'email' => 'required',
            'password' => 'required',
            'usertype' => 'required',
        ]);

        User::create($userdata);

        return redirect('/employee/login');
    }

    public function login_page(){
        return view('employee.login');
    }

    public function login_employee(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'value' => 'required',
        ]);
    
        if ($credentials['value'] == '0') {
            if (Auth()->attempt($credentials)) {
                // User is logged in successfully
                return redirect('/employee/dashboard'); // Redirect to the desired route upon successful login
            } else {
                return "Login Failed"; // Incorrect credentials
            }
        } else {
            return "You are not Registered"; // User does not exist
        }
        }
    

    public function employee_dashboard(){

        return view('employee.dash');
    }
    
    public function employee_leave_request(Request $request){
            $leave = $request->validate([
                'name'=> 'required',
                'email'=> 'required',
                'leavereason'=> 'required',
                'leavetype'=> 'required',
                'leavedays'=> 'required',
            ]);

            Employeeleave::create($leave);

            return back();

    }


}
