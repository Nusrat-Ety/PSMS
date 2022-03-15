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
        $accessoryimage=null;
        if($request->hasFile('accessory_image')){
            
            $accessoryimage=date('Ymdhms').'.'.$request->file('accessory_image')->getClientOriginalExtension();
            $request->file('accessory_image')->storeAs('/uploads/accessory/',$accessoryimage);
        }

       Accessory::create([
        'category'=>$request->category,
        'name'=>$request->name,
        'details'=>$request->details,
        'quantity'=>$request->quantity,
        'image'=>$accessoryimage,
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
    public function editAccessory($id)
    {
        $accessory=Accessory::find($id);
        return view ('Admin.pages.accessory.edit', compact('accessory'));
    }
    public function updateAccessory(Request $request,$id)
    {
        $accessory=Accessory::find($id);

        $image_name=$accessory->image;
        //              step 1: check image exist in this request.
                if($request->hasFile('accessory_image'))
                {
                    // step 2: generate file name
                    $image_name=date('Ymdhis') .'.'. $request->file('accessory_image')->getClientOriginalExtension();
        
                    //step 3 : store into project directory
        
                    $request->file('accessory_image')->storeAs('/uploads/accessory',$image_name); 
                }
                $accessory=Accessory::find($id);
                $accessory->update([
                       'category'=>$request->category,
                       'name'=>$request->name,
                       'details'=>$request->details,
                       'quantity'=>$request->quantity,
                       'image'=>$image_name,
                       'price'=>$request->price,
                       
                       
            
                ]);
                return redirect ()->route('admin.view.accessory')->with('success','Accessory Updated');
    }
}
