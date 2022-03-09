<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    public function createaccessory()
    {
      return view ('Admin.partial.pages.accessory.create');
    }
}
