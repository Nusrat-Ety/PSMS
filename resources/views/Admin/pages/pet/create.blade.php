@extends('welcome')
@section('content')

<div class ="row">
  <div class="col mb-4" style="margin-left:10rem;margin-right:10rem;">
    @if (session()->has('msg'))
     <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<form  action="{{route('admin.store.pet')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <h1>Pet Form</h1>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-control">
          <label class="form-label" for="form6Example1">Name</label>
          <input name="petname" style="height:3rem;"type="text" id="form6Example1" class="input-group input-group-outline" />
          
        </div>
      </div>
      <div class="col">
        <div class="form-control">
          <label class="form-label" for="form6Example2">Breed</label>
          <input name="breed" style="height:3rem;"type="text" id="form6Example2" class="input-group input-group-outline" />
         
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Age</label>
      <input name="petage" style="height:3rem;"type="number" id="form6Example3" class="input-group input-group-outline" />
      
    </div>
  
    <!-- Text input -->
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="role">Pet_Type</label>
       <select name="pettype" id="role"style="height:3rem;" class="input-group input-group-outline">
          @foreach($types as $type)
                <option value="{{$type->id}}">{{$type->type}}</option>
                     @endforeach
       </select>
      
    <!-- Number input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example6">Image</label>
      <input name="PetImage"style="height:3rem;" type="file" id="fileinput" class="input-group input-group-outline" />
      
    </div>
  
  

  
    <!-- Checkbox -->
    
    
    <div class="form-check d-flex justify-content-center"style="margin-right: 35rem;">
    
      <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
      <label class="form-check-label" for="form6Example8"> Create an account? </label>
    </div>
  <br>
    <!-- Submit button -->
    <button style="margin-right: 36rem;"type="submit" class="btn btn-primary btn-block mb-4">submit</button>
  </form>
</div>
</div>
  @endsection