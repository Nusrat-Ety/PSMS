@extends('welcome')
@section('content')

<div class ="row">
  <div class="col mb-4" style="margin-left:10rem;margin-right:10rem;">
    @if (session()->has('msg'))
     <p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<form  action="{{route('breed.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <h1>Breed Form</h1>
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
          <label class="form-label" for="form6Example2">Details</label>
          <input name="details" style="height:3rem;" type="text" id="form6Example2" class="input-group input-group-outline" />
         
        </div>
      </div>
    </div>
   
    
  <br>
    <!-- Submit button -->
    <button style="margin-right: 36rem;" type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
</div>
</div>
<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>

    </tr>
   </thead>
    <tbody> 
    @foreach($breeds as $key=>$breed)
    <tr>
  
      <td>{{$key+1}}</td>
      <td>{{$breed->name}}</td>
      <td>{{$breed->details}}</td>
      {{-- <td>
        <img width="100px" src="{{url('/uploads/users/'.$user->image)}}" alt="">
      </td> --}}
    <td>
      
      <div style="display: flex;">
       <div style="padding-right: 10px;">

    </div>
     
     </div>
    </td> 
    </tr>
    @endforeach 
  </tbody>
</table>
  @endsection