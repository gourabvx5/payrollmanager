<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employeeleave;

class ManagerController extends Controller
{
    
    public function register_page(){
        return view('manager.register');
    }

    public function create_manager(Request $request){
        $userdata = $request->validate([
            'name' => 'required ',
            'email' => 'required',
            'password' => 'required',
            'usertype' => 'required',
        ]);

        User::create($userdata);

        return redirect('/manager/login');
    }

    public function login_page(){
        return view('manager.login');
    }
    
    public function login_manager(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'value' => 'required',
        ]);
    
        if ($credentials['value'] == '1') {
            if (Auth()->attempt($credentials)) {
                // User is logged in successfully
                return redirect('/manager/dashboard'); // Redirect to the desired route upon successful login
            } else {
                return "Login Failed"; // Incorrect credentials
            }
        } else {
            return "You are not Registered"; // User does not exist
        }
    }
    
    public function manager_dashboard(){
        $leaves = Employeeleave::all();
        return view('manager.dash', ['leaves' => $leaves]);
    }

    public function leave_req_view($id){
        $leaves = Employeeleave::find($id);
        return view('manager.reqview', ['leaves' => $leaves]);
    }

    public function leave_req_edit(Request $request,$id){
        $leaves = Employeeleave::find($id);
        // $leaves->name = $request->name;
        // $leaves->email = $request->email;
        // $leaves->leavereason = $request->leavereason;
        // $leaves->leavetype = $reqleavetype->name;
        // $leaves->leavedays = $request->leavedays;
        return view('manager.reqedit', ['leaves' => $leaves]);
    }


}
