<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.users.registered')->with('users', $users);
    }

    public function edit($id)
    {
        $user_role= User::find($id);
        return view ('admin.users.edit')->with('user_role',$user_role);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->role = $request->input('role');
        $user->ban = $request->input('ban');
        $user-> update();
        return redirect()->back()->with('status','user is updated');
    }
}
