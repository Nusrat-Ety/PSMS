<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Pet;

class PetController extends Controller
{
    public function indexpet()
    { $pets=Pet::all();
        return view('Admin.pages.pet.index',compact('pets'));
    }

    public function createpet()
    {   $types=Type::all();
        return view('Admin.pages.pet.create',compact('types'));
    }

    public function storepet(Request $request)
    {  
        $petimage='';
        if($request->hasfile('PetImage'));
        {
            $file=$request->file('PetImage');
            $petimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($file);
            $file->storeAs('/uploads/pets/',$petimage);
        }

        Pet::create([
            'name'=>$request->petname,
            'breed'=>$request->breed,
            'type_id'=>$request->pettype,
            'age'=>$request->petage,
            'image'=>$petimage,

        ]);
        return redirect()->back()->with('msg','Pet Added successfully');
    }
}
