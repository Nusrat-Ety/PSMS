<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VetController extends Controller
{
    public function create()
    {
        return view('Admin.pages.vet.create');
    }
}
