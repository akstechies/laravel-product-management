<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/signuplogin/login');
    }

    public function registerpage()
    {
        return view('admin/signuplogin/register');
    }

    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

      //  dd($credentials);

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with('message', "Login Successfully");
        } else {
            return redirect()->route('admin.index')->with('error', 'Unable to Login');
        }


    }

    public function register(Request $request)
    {
        //dd($request);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        try {
        $create = Admin::create($data);
        } catch (\Exception $e) {
            $admin =  null;
            return $e->getMessage();
        }
       /* $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $create = $admin->save();*/
    }

    public function dashboard()
    {
        return view('admin/dashboard/dashboard');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.index')->with('message', 'Logged Out');
      }
}
