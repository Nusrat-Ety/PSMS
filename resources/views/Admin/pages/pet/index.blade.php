@extends('welcome')

@section('content')
<p>
  <a href="{{route('admin.create.pet')}}" class="btn btn-success">Create New Pet</a>
</p>

<table class="table">
  
  <thead>
    <tr style="    text-align: center;background-color:powderblue;">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Breed</th>
      <th scope="col">Age</th>
      <th scope="col">Pet_Type</th>
      <th scope="col">Image</th>
      <th scope="col">Handle</th>
      
    </tr>
   </thead>
    <tbody> 
    @foreach($pets as $key=>$pet)
    <tr style="    text-align: center;">
  
      <td>{{$key+1}}</td>
      <td>{{$pet->name}}</td>
      <td>{{$pet->breed}}</td>
      <td>{{$pet->age}}</td>
      <td>{{$pet->type->name}}</td>
      <td>
        <img width="50px" src="{{url('/uploads/pets/'.$pet->image)}}" alt="">
      </td>               
     <td>
      <div style="display: flex;">
       <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(228, 11, 11)" href="#">Delete</a></div>
      <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(32, 77, 51)" href="#">view</a></div>
      <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(32, 77, 51)" href="#">Edit</a></div>
     </div>
    </td> 
    </tr>
    @endforeach
  </tbody>
</table>
@endsection