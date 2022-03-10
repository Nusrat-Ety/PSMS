@extends('welcome')
@section('content')
<div style="margin: 30px 120px 30px 120px; background: #edf1f5; padding: 5px;">
<a class="btn btn-info" href="{{route('admin.view.accessory')}}">View Accessory</a>
<br>
<br>
<br>
<div class ="col-12" >
@if(session()->has('success'))
    <p class="alert alert-success">
        {{ session()->get('success') }}
</p>
@endif
<form action="{{route('admin.submit.accessory')}}" method="POST" enctype="multipart/form-data">
@csrf
  <h1>Accessory Form</h1>
   <div>
    
   <div class="form-group mb-4" style="width: 50%">
      <input type="text" name="category" id="form6Example3" class="input-group input-group-outline" />
      <label class="form-label" for="form6Example3">Category</label>
    </div>
 
    <div class="form-group mb-4" style="width: 50%">
      <input type="text" name="name" id="form6Example3" class="input-group input-group-outline" />
      <label class="form-label" for="form6Example3">Accessory Name</label>
    </div>
  
   
    <div class="form-outline mb-4" style="width: 50%">
      <input type="text" name="details" id="form6Example4" class="input-group input-group-outline" />
      <label class="form-label" for="form6Example4">Accessory Details</label>
    </div>
  
    
    <div class="form-outline mb-4" style="width: 50%">
      <input type="number" name="quantity" id="form6Example5" class="input-group input-group-outline" />
      <label class="form-label" for="form6Example5">Quantity</label>
    </div>
    <div class="form-outline mb-4" style="width: 50%">
      <input type="file" name="accessory_image" id="form6Example5" class="input-group input-group-outline" />
      <label class="form-label" for="form6Example5">Image</label>
    </div>
  
  
    <div class="form-outline mb-4" style="width: 50%";>
      <input type="number" name="price" id="form6Example6" class="input-group input-group-outline" >
      <label class="form-label" for="form6Example6">Price</label>
    </div>
   
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>

  </div>
  
</div>
@endsection