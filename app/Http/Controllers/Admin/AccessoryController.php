<?php

namespace App\Http\Controllers\Admin;

use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccessoryController extends Controller
{
    public function createAccessory ()
    {
        return view ('Admin.pages.accessory.create');
    }
    public function submitAccessory(Request $request)
    {
       Accessory::create([
        'category'=>$request->category,
        'name'=>$request->name,
        'details'=>$request->details,
        'quantity'=>$request->quantity,
        'price'=>$request->price,
       ]);

       return redirect()->back()->with('success','Accessory Created Successfully');
    }
    public function viewAccessory ()
    {
        $viewaccessory=Accessory::all();
        return view('Admin.pages.accessory.view',compact('viewaccessory'));
    }
    public function deleteAccessory($id)
    {
        $accessory=Accessory::find($id)->delete();
        return redirect ()->back()->with('success','Accessory Deleted Succesfully');
    }
}
