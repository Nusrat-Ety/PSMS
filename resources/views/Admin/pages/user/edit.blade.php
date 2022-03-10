@extends('welcome')
@section('content')

<div class ="row">
  <div class="col mb-4" style="margin-left:10rem;margin-right:10rem;">
    @if (session()->has('msg'))
     <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<form  action="{{route('users.update',$useredit->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <h1>User Form</h1>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-control">
          <label class="form-label" for="form6Example1">Name</label>
          <input value="{{$useredit->name}}" name="username" style="height:3rem;"type="text" id="form6Example1" class="input-group input-group-outline" />
          
        </div>
      </div>
      <div class="col">
        <div class="form-control">
          <label class="form-label" for="form6Example2">Gender</label>
          <input value="{{$useredit->gender}}" name="gender" style="height:3rem;"type="text" id="form6Example2" class="input-group input-group-outline" />
         
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example3">Phone</label>
      <input value="{{$useredit->phone}}" name="phonenumber" style="height:3rem;"type="number" id="form6Example3" class="input-group input-group-outline" />
      
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="floatingInput">Email</label>
      <input value="{{$useredit->email}}" name="email"style="height:3rem;" type="email" id="floatingemail" class="input-group input-group-outline" />
      
    </div>
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="role">Role</label>
       <select value="{{$useredit->role_id}}" name="role" id="role"style="height:3rem;" class="input-group input-group-outline">
          @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
                     @endforeach
       </select>
      
      
    </div>
    <!-- Number input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example6">Image</label>
      <input name="Imagefile"style="height:3rem;" type="file" id="fileinput" class="input-group input-group-outline" />
      
    </div>
  
    <!-- Message input -->
    <div class="form-outline mb-4">
      <label class="form-label" for="form6Example7">Address</label>
      <input value="{{$useredit->address}}" name="address"style="height:3rem;" type="text" id="form6Example6" class="input-group input-group-outline" />
     
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