<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdoptionDonation;
use App\Models\Breed;
use Illuminate\Http\Request;
use App\Models\Type;

class AdoptionController extends Controller
{
    public function list()
    {
        $donations=AdoptionDonation::all();
        return view('Admin.pages.adoption-donation.list',compact('donations'));
    }
    public function create()
    {
        $types=Type::all();
        $breeds=Breed::all();
        return view('Admin.pages.adoption-donation.create',compact('types','breeds'));
    }
    public function store(Request $req)
    {
        $image_name=null;
        if($req->hasFile('image'))
        {
            $image_name=date('Ymdhis').'.'.$req->file('image')->getClientOriginalExtension();
            $req->file('image')->storeAs('/pets',$image_name);
        }
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'age'=>'required',
            'quantity'=>'required',
            'health'=>'required',
            'vaccine_date'=>'required',
            'vaccine_dose'=>'required',



        ]);  

        AdoptionDonation::create([
            
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'phone'=>$req->phone,
            'type_id'=>$req->type,
            'breed_id'=>$req->breed,
            'age'=>$req->age,
            'quantity'=>$req->quantity,
            'health'=>$req->health,
            'vaccine_date'=>$req->vaccine_date,
            'vaccine_dose'=>$req->vaccine_dose,
            'image'=>$image_name,
            

        ]);
        return redirect()->route('adoption.donation.list')->with('msg','Donation has successfully created');

    }


}
