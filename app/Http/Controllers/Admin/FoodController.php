<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function createFood()
    {
      return view ('Admin.pages.food.create');
    }
}
