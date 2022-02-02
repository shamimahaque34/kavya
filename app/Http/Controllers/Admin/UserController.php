<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    protected $user;
    protected $users;

    public function addUser()
    {
        return view('admin.user.add-user');
    }

    public function newUser(Request $request)
    {
        User::newUser($request);
        return redirect()->back()->with('message', 'User Created Successfully');
    }
    public function manageUser(){
        $this->users = User::all();
        return view('admin.user.manage-user', ['users' => $this->users]);
    }
    public function editUser($id){
        $this->user = User::find($id);
        return view('admin.user.edit-user', ['user'=>$this->user]);
    }
    public function updateUser(Request $request){
        User::updateUser($request);
        return redirect('/manage-user')->with('message', 'User Updated Successfully');
    }
    public function deleteUser($id){
        $this->user = User::find($id);
        $this->user->delete();
        return redirect()->back()->with('message', 'User Deleted Successfully');
    }

}
