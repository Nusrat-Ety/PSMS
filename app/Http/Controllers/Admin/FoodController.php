<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function createfood()
    {
      return view ('Admin.partial.pages.food.create');
    }
}
