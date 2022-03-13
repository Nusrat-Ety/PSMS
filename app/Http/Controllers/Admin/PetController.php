<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pet;
use App\Models\Breed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;

class PetController extends Controller
{
    public function petList()
    {
        return view('Admin.pages.pet.list');
    }
    public function breedCreate()
    {
        $breeds=Breed::all();
        return view('Admin.pages.pet.breed.create',compact('breeds'));
    }
    public function breedStore(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'details'=>'required',
            
        ]);
        Breed::create([
            
            'name'=>$req->name,
            'details'=>$req->details,

        ]);
        return redirect()->route('breed.create')->with('msg','Breed has successfully created');

    }

    
    public function typeCreate()
    {
        $types=Type::all();

    return view('Admin.pages.pet.type.create',compact('types'));
    }
    public function typeStore(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'details'=>'required',
            
        ]);
        Type::create([
            
            'name'=>$req->name,
            'details'=>$req->details,

        ]);
        return redirect()->route('type.create')->with('msg','Type has successfully created');

    }

}
