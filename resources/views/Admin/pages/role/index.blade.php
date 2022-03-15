@extends('welcome')

@section('content')
<div style="display: flex;">
  <p style="padding-right:10px;">
  <a href="{{route('admin.role.create')}}" class="btn btn-success">Create New Role</a>
  </p>
  <p>
    <a href="{{route('admin.permission.index')}}" class="btn btn-success">Permission list</a>
    </p>
  
</div>

<table class="table">
  
  <thead>
    <tr style="    text-align: center;background-color:powderblue;">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Status</th>
      <th scope="col">Handle</th>
      
    </tr>
   </thead>
    <tbody> 
    @foreach($roles as $key=>$role)
    <tr style="    text-align: center;">
  
      <td>{{$key+1}}</td>
      <td>{{$role->name}}</td>
      <td>{{$role->slug}}</td>
      <td>{{$role->status}}</td>              
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