@extends('welcome')
@section('content')

<div class ="row">
  <div class="col mb-4" style="margin-left:10rem;margin-right:10rem;">
    @if (session()->has('msg'))
     <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<form  action="#" method="POST" enctype="multipart/form-data">
  @csrf
  <h1>Adoption Form</h1>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-control">
          <label class="form-label" for="form6Example1">Name</label>
          <input name="name" style="height:3rem;" type="text" id="form6Example1" class="input-group input-group-outline" />
          
        </div>
      </div>
      <div class="col">
        <div class="form-control">
          <label class="form-label" for="form6Example2">Email</label>
          <input name="email" style="height:3rem;" type="email" id="form6Example2" class="input-group input-group-outline" />
         
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Address</label>
      <input name="address" style="height:3rem;"type="text" id="form6Example3" class="input-group input-group-outline" />
      
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="floatingInput">Phone</label>
      <input name="phone" style="height:3rem;" type="email" id="floatingemail" class="input-group input-group-outline" />
      
    </div>
  
    <!-- Number input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example6">Pet's Category</label>
      <input name="Imagefile"style="height:3rem;" type="text" id="fileinput" class="input-group input-group-outline" />
      
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example6">Pet's Age</label>
      <input name="Imagefile"style="height:3rem;" type="number" id="fileinput" class="input-group input-group-outline" />
      
    </div>
  
    <!-- Message input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Pet's Quantity</label>
      <input name="address"style="height:3rem;" type="number" id="form6Example6" class="input-group input-group-outline" />
     
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Health Condition</label>
      <input name="address"style="height:3rem;" type="text" id="form6Example6" class="input-group input-group-outline" />
     
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Vaccine Date</label>
      <input name="address"style="height:3rem;" type="date" id="form6Example6" class="input-group input-group-outline" />
     
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Vaccine Dose</label>
      <input name="address"style="height:3rem;" type="text" id="form6Example6" class="input-group input-group-outline" />
     
    </div>
  

  
    <!-- Checkbox -->
    
    
    
  <br>
    <!-- Submit button -->
    <button style="margin-right: 36rem;"type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
</div>
</div>
  @endsection