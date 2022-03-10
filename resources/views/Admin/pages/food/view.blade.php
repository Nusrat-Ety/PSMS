@extends('welcome')
@section('content')
<a class="btn btn-dark" href="{{route('admin.create.food')}}">Create New Food</a>
<h2> Food List</h2>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Food Type</th>
      <th scope="col">Details</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th> 
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($viewfood as $key=>$food)
    <tr>
    <td>{{$key+1}}</td>
    <td>{{$food->name}}</td>
    <td>{{$food->food_type}}</td>
    <td>{{$food->details}}</td>
    <td>{{$food->quantity}}</td>
    <td>{{$food->price}}</td>
    <td>
        <a class="btn btn-primary" href="">Details</a>
        <a class="btn btn-info" href="{{route('admin.delete.food',$food->id)}}">Delete</a>
        <a class="btn btn-info" href="">Edit</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection