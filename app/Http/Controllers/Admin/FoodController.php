<?php

namespace App\Http\Controllers\Admin;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function createFood()
    {
      return view ('Admin.pages.food.create');
    }
    public function submitFood(Request $request)
    {
      Food::create([
        'name'=>$request->name,
        'food_type'=>$request->type,
        'details'=>$request->details,
        'quantity'=>$request->quantity,
        'price'=>$request->price,
       ]);
       return redirect()->back()->with('success','Food Added Successfully');
    }
    public function viewFood()
    {
      $viewfood=Food::all();
        return view('Admin.pages.food.view',compact('viewfood'));
    }
    public function deleteFood($id)
    {
      $food=Food::find($id)->delete();
      return redirect ()->back()->with('success','Food Deleted Succesfully');
    }
}
