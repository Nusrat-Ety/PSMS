<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function indexrole()
    { 
        $roles=Role::all();
        return view('Admin.pages.role.index',compact('roles'));
    }
    public function createrole()
    {
        return view('Admin.pages.role.create');
    }

    public function storerole(Request $request)
    {
        Role::create([
            'name'=>$request->rolename,
            'slug'=>$request->roleslug,
            'status'=>$request->rolestatus,

        ]);
        return redirect()->route('admin.role.index');
    }
}
