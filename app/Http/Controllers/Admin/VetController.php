<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vet;
use Illuminate\Http\Request;

class VetController extends Controller
{
    public function list()
    {
        $vets=Vet::all();
        return view('Admin.pages.vet.list',compact('vets'));
    }
    public function create()
    {
        return view('Admin.pages.vet.create');
    }
    public function store(Request $req)
    {
        $req->validate([
            'service_name'=>'required',
            'details'=>'required',
            'price'=>'required'
        ]);
        Vet::create([
            
            'service_name'=>$req->service_name,
            'details'=>$req->details,
            'price'=>$req->price

        ]);
        return redirect()->route('vet.list')->with('msg','Vet has successfully created');

    }

    }

