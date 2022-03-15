@extends('welcome')
@section('content')
<a class="btn btn-dark" href="{{route('admin.create.accessory')}}">Create New Accessory</a>
<h2> Accessory List</h2>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th> 
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($viewaccessory as $key=>$accessory)
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$accessory->category}}</td>
    <td>{{$accessory->name}}</td>
    <td>{{$accessory->quantity}}</td>
    <td>
     <img  style="width: 50px;height:50px;"src="{{url('/uploads/accessory/'.$accessory->image)}}">
    </td>
    <td>{{$accessory->price}}</td>
    <td>
        <a class="btn btn-primary" href="">Details</a>
        <a class="btn btn-info" href="{{route('admin.delete.accessory',$accessory->id)}}">Delete</a>
        <a class="btn btn-info" href="{{route('admin.edit.accessory',$accessory->id)}}">Edit</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection