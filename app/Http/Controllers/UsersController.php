<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:users',
            'image' => 'required|mimes:jpeg,bmp,png',
            'password' => 'required'
        ]);

        $user = new User();

        $user_image = $request->file('image');
        $user_image_new_name = time()."-".$user_image->getClientOriginalName();
        $user_image->move('uploads/users', $user_image_new_name);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password =  $request->password;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->gender = $request->gender;
        $user->image = $user_image_new_name;

        $user->save();

        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'image' => 'mimes:jpeg,bmp,png',
            'password' => 'required'
        ]);

        $user = User::find($id);
        if($request->file('image')!= "")
        {
            $user_image = $request->file('image');
            $user_image_new_name = time()."-".$user_image->getClientOriginalName();
            $user_image->move('uploads/users', $user_image_new_name);
            $user->image = $user_image_new_name;
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = ($request->password);
        $user->role = $request->role;
        $user->gender = $request->gender;

        $user->save();

        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users');
    }
    public function visttor(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required|max:255|email',
            'phone'=>'required',


        ]);
    }
}
