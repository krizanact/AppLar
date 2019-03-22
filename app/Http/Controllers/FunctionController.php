<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;


class FunctionController extends Controller
{


    /*Access control  without login */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'first_name'=>'required',
            'last_name' =>'required',
            'username' => 'required',
            'password' => ['required',
                'min:6',
                ],
            'user_type' => 'required',
            'user_location' => 'nullable',

        ]);


       $user = new User;
       $user->first_name = $request->input('first_name');
       $user->last_name = $request->input('last_name');
       $user->username = $request->input('username');
       $user->user_type = $request->input('user_type');
       $user->user_location = $request->input('user_location');
       $user->password = bcrypt(request('password'));

       $user->save();

       // return $request;
       return redirect('/home')->with('success','New User Added');

    }



    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name'=>'required',
            'last_name' =>'required',
            'user_type' =>'required',
            'user_location' => 'nullable'
        ]);


        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->user_type = $request->input('user_type');
        $user->user_location = $request->input('user_location');
        $user->save();



        return redirect('/home')->with('success','User Updated');


    }


    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        return redirect('/home')->with('success','User Removed');
    }




}
