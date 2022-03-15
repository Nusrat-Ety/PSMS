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
      // dd($request->all());
      $foodimage=null;
      if($request->hasFile('food_image')){
          
          $foodimage=date('Ymdhms').'.'.$request->file('food_image')->getClientOriginalExtension();
          $request->file('food_image')->storeAs('/uploads/food/',$foodimage);
      }
      Food::create([
        'name'=>$request->name,
        'food_type'=>$request->type,
        'details'=>$request->details,
        'quantity'=>$request->quantity,
        'image'=>$foodimage,
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
    public function editFood($id)
    {
      $food=Food::find($id);
      return view ('Admin.pages.food.edit',compact('food'));
    }
    public function updateFood(Request $request,$id)
    {
      $food=Food::find($id);
       
    $image_name=$food->image;
    //              step 1: check image exist in this request.
            if($request->hasFile('food_image'))
            {
                // step 2: generate file name
                $image_name=date('Ymdhis') .'.'. $request->file('food_image')->getClientOriginalExtension();
    
                //step 3 : store into project directory
    
                $request->file('food_image')->storeAs('/uploads/food',$image_name);
    
            }
            $food=Food::find($id);
            $food->update([
                   'name'=>$request->name,
                   'food_type'=>$request->type,
                   'details'=>$request->details,
                   'quantity'=>$request->quantity,
                   'image'=>$image_name,
                   'price'=>$request->price,
                   
                   
        
            ]);
            return redirect ()->route('admin.view.food')->with('success','Food Updated');
    }
}
