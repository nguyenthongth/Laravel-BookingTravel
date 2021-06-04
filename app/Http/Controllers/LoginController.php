<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì
            return redirect()->route('dashboard.index'); // cach 1
            // return redirect('admincp/dashborad'); // cach 2
        } else {
            return view('authentication.login');
        }
    }

    public function postLogin(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Chưa nhập tài khoản',
                'password.required' => 'Chưa nhập mật khẩu'
            ]
        );
        
        if (auth('web')->attempt(['name' => $request->username, 'password' => $request->password])) {
            $user = User::find(Auth::id());
            if($user['role_id'] == config('auth.role.customer')){
                return view('Pages-user.trangchu')->with('data',$user); 
            }
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->route('authentication.login')->with('flash_data', ['type' => 'error', 'message' => 'Thông tin tài khoản hoặc mật khẩu không đúng'])->withInput();
        }
    }
    
    public function getRegister()
    {
        return view('authentication.register');
    }

    public function postRegister(Request $request)
    {
        $data = User::storeCustomer($request);
        return view('authentication.login')->with('data',$data);
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('authentication.login');
    }
}
