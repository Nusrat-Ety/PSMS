@extends('welcome')
@section('content')

<div class ="row">
  <div class="col mb-4" style="margin-left:10rem;margin-right:10rem;">
    @if (session()->has('msg'))
     <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<form  action="{{route('vet.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <h1>Vet Form</h1>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-control">
          <label class="form-label" for="form6Example1">Service Name</label>
          <input name="service_name" style="height:3rem;" type="text" id="form6Example1" class="input-group input-group-outline" />
          
        </div>
      </div>
      <div class="col">
        <div class="form-control">
          <label class="form-label" for="form6Example2">Details</label>
          <input name="text" style="height:3rem;" type="email" id="form6Example2" class="input-group input-group-outline" />
         
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Price</label>
      <input name="address" style="height:3rem;" type="number" id="form6Example3" class="input-group input-group-outline" />
      
    </div>
  
   
    
  <br>
    <!-- Submit button -->
    <button style="margin-right: 36rem;" type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
</div>
</div>
  @endsection