<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
 public function adoptionAdd()
 {
     return view('Admin.partial.pages.adoptionform');
 }

}
