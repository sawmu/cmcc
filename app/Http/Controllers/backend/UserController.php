<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
    public function UserView()
    {
        $data['allData'] = User::all(); //array formant
        return view('backend.user.view_user', $data);
       
    }

    public function UserAdd()
    {
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'usertype' => 'required',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->usertype = $request->usertype;
        $data->save();


        return Redirect()->route('user.view')->with('success', 'User Inserted Successfull');

    }

    public function UserEdit($id)
    {
        $editData = User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id)
    {
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            
            'usertype' => $request->usertype,
        
        ]);
        

        return Redirect()->route('user.view')->with('success', 'User Updated Successfull');
    }

    public function UserDelete($id)
    {
        $data = User::find($id);
        $data->delete();

        return Redirect()->route('user.view')->with('success', 'User Deleted Successfull');
    }
}
