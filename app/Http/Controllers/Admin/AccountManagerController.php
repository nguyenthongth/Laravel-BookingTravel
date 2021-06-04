<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AccountManagerController extends Controller
{
    public function getList()
    {
        $users = User::index();
        return view('account.list')->with('users',$users);
    }

    public function create()
    {
        return view('account.form_account');
    }

    public function store(Request $request)
    {
        $data = User::store($request->all());
        return redirect()->back()->with('thongbao','Thêm thành công');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('account.edit_account')->with('user',$user);
    }

    public function update(Request $request, $id)
    {
       $user = User::find($id);
       $data = User::updatew($request->all(),$user);
       return redirect()->back();
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

}
