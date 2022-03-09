@extends('welcome')
@section('part')
<br>
<br>
<br>
<div class ="col-12">
<form>
  <h1>Food Form</h1>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-6">
      <div class="col">
        <div class="form-outline">
          <input type="text" name="name" id="form6Example2" class="form-control" />
          <label class="form-label" for="form6Example2">Food Category</label>
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="text" name="details" id="form6Example3" class="form-control" />
      <label class="form-label" for="form6Example3">Food Name</label>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="text" name="type" id="form6Example4" class="form-control" />
      <label class="form-label" for="form6Example4">Food Type</label>
    </div>
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="number" name="quantity" id="form6Example5" class="form-control" />
      <label class="form-label" for="form6Example5">Quantity</label>
    </div>
  
    <!-- Number input -->
    <div class="form-outline mb-4">
      <input type="number" name="price" id="form6Example6" class="form-control" />
      <label class="form-label" for="form6Example6">Price</label>
    </div>
    <!-- Submit bon -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
  
</div>
@endsection