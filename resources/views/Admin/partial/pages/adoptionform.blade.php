@extends('welcome')
@section('part')
<br>
<br>
<br>
<div class ="row">
  <div class="col mb-4" style="margin-left:15rem;">
<form>
  <h1>Adoption Form</h1>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form6Example1" class="form-control" />
          <label class="form-label" for="form6Example1">Status</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form6Example2" class="form-control" />
          <label class="form-label" for="form6Example2">Breed</label>
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="text" id="form6Example3" class="form-control" />
      <label class="form-label" for="form6Example3">Gender</label>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="number" id="form6Example4" class="form-control" />
      <label class="form-label" for="form6Example4">Age</label>
    </div>
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="number" id="form6Example5" class="form-control" />
      <label class="form-label" for="form6Example5">Weight</label>
    </div>
  
    <!-- Number input -->
    <div class="form-outline mb-4">
      <input type="text" id="form6Example6" class="form-control" />
      <label class="form-label" for="form6Example6">Good with</label>
    </div>
  
    <!-- Message input -->
    <div class="form-outline mb-4">
      <textarea class="form-control" id="form6Example7" rows=""></textarea>
      <label class="form-label" for="form6Example7">Location</label>
    </div>
  

  
    <!-- Checkbox -->
    
    
    <div class="form-check d-flex justify-content-center mb-4">
    
      <input class="form-check-input me-2" type="checkbox"style="margin-right:8rem;" value="" id="form6Example8" checked />
      <label class="form-check-label" for="form6Example8"> Create an account? </label>
    </div>
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
  </form>
</div>
</div>
  @endsection