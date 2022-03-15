<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function indexpermission()
    { $permissions=Permission::all();
        return view('Admin.pages.role.permissions.index',compact('permissions'));
    }

    public function createpermission()
    {
        return view('Admin.pages.role.permissions.create');
    }

    public function storepermission(Request $request)
    {
       Permission::create([
        'name'=>$request->rolename,
            'slug'=>$request->roleslug,
            'status'=>$request->rolestatus,
       ]);
       return redirect()->back()->with('msg','Permission Added successfully');
    }
}
