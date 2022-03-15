@extends('welcome')
@section('content')

<div class ="row">
  <div class="col mb-4" style="margin-left:10rem;margin-right:10rem;">
    <form  action="{{route('admin.permission.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <h2>Add Permission Form</h2>
     <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
           <div class="col">
              <div class="form-control">
                   <label class="form-label" for="form6Example1">Name</label>
                  <input name="rolename" style="height:3rem;"type="text" id="form6Example1" class="input-group input-group-outline" />
          
                </div>
            </div>
             <div class="col">
                 <div class="form-control">
                       <label class="form-label" for="form6Example2">Slug</label>
                       <input name="roleslug" style="height:3rem;"type="text" id="form6Example2" class="input-group input-group-outline" />
         
                   </div>
               </div>
        </div>
  
  
      <!-- Message input -->
       <div class="form-outline mb-4">
           <label class="form-label" for="form6Example7">Status</label>
            <input name="rolestatus"style="height:3rem;" type="text" id="form6Example6" class="input-group input-group-outline" />
    
        </div>
  
    
    
          <div class="form-check d-flex justify-content-center"style="margin-right: 35rem;">
                 <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                <label class="form-check-label" for="form6Example8"> Create an Role? </label>
            </div>
        <br>
         <!-- Submit button -->
         <button style="margin-right: 36rem;"type="submit" class="btn btn-primary btn-block mb-4">submit</button>
  </form>
</div>
</div>
  @endsection