<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function petList()
    {
        return view('Admin.pages.pet.list');
    }
    public function breedCreate()
    {
        return view('Admin.pages.pet.breed.create');
    }
    public function typeCreate()
    {
        return view('Admin.pages.pet.type.create');
    }
}
