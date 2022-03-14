@extends('welcome')
@section('content')

<div class ="row">
  <div class="col mb-4" style="margin-left:10rem;margin-right:10rem;">
    @if (session()->has('msg'))
     <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<form  action="{{route('adoption.donation.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <h1>Donation Form</h1>
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
    <div class="form-group mb-4">
      <label class="form-label" for="floatingInput">Pet's Category</label>

    <select name="type" class="input-group input-group-outline" placeholder="Select Pet's Category" style="height:3rem;" aria-label="Default select example">
      <option selected>Select Pet's Category</option>
      @foreach ($types as $type)
      <option value="{{$type->id}}">{{$type->name}}</option>
      @endforeach
    </select>
    </div>
    <div class="form-group mb-4">
      <label class="form-label" for="floatingInput">Pet's Breed</label>

    <select name="breed" class="input-group input-group-outline" placeholder="Select Pet's Category" style="height:3rem;" aria-label="Default select example">
      <option selected>Select Pet's Breed</option>
      @foreach ($breeds as $breed)
      <option value="{{$breed->id}}">{{$breed->name}}</option>
      @endforeach
    </select>
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example6">Pet's Age</label>
      <input name="age" style="height:3rem;" type="number" id="fileinput" class="input-group input-group-outline" />
      
    </div>
  
    <!-- Message input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Pet's Quantity</label>
      <input name="quantity" style="height:3rem;" type="number" id="form6Example6" class="input-group input-group-outline" />
     
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Health Condition</label>
      <input name="health" style="height:3rem;" type="text" id="form6Example6" class="input-group input-group-outline" />
     
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Vaccine Date</label>
      <input name="vaccine_date"style="height:3rem;" type="date" id="form6Example6" class="input-group input-group-outline" />
     
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Vaccine Dose</label>
      <input name="vaccine_dose" style="height:3rem;" type="text" id="form6Example6" class="input-group input-group-outline" />
     
    </div>
    <div class="form-outline mb-4 form-control">
      <label class="form-label" for="form6Example7">Image</label>
      <input name="image" style="height:3rem;" type="file" id="form6Example6" class="input-group input-group-outline" />
     
    </div>
  

  
    <!-- Checkbox -->
    
    
    
  <br>
    <!-- Submit button -->
    <button style="margin-right: 36rem;"type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
</div>
</div>
  @endsection