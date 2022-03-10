<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('Admin.pages.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $roles=Role::all();
        return view('Admin.pages.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userimage='';
        if ($request->hasfile('Imagefile')) {
            $file=$request->file('Imagefile');
            $userimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($file);
            $file->storeAs('/uploads',$userimage);
        }
        
        // dd ($request->all());
        User::create([
            'role_id'=>$request->role,
             'name' =>$request->username,
             'address'=>$request->address,
             'gender'=>$request->gender,
             'email'=>$request->email,
             'password'=>bcrypt($request->password),
             'phone'=>$request->phonenumber,
            'image'=>$userimage,
         
        ]);
        return redirect()->back()->with('msg','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $usershow=User::find($user_id);
        return view('Admin.pages.user.show',compact('usershow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {   $useredit=User::find($user_id);
        $roles=Role::all();
        return view('Admin.pages.user.edit',compact('useredit','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $userupdate=User::find($user_id);
        $userimage=$userupdate->image;
        if($request->hasfile('Imagefile'))
        {
            $userimage=date('ymdhis').'.'.$request->file('Imagefile')->getClientOriginalExtension();
            $request->file('Imagefile')->storeAs('/uploads/',$userimage);
        }
        $userupdate->update([
            'role_id'=>$request->role,
            'name'=>$request->username,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'phone'=>$request->phonenumber,
            'email'=>$request->email,

        ]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        User::find($user_id)->delete();
        return redirect()->back();
    }
}
