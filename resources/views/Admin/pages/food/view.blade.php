@extends('welcome')
@section('content')
<a class="btn btn-dark" href="{{route('admin.create.food')}}">Create New Food</a>
<h2> Food List</h2>
<table class="table table-striped table-dark">
  <thead>
    <tr style="text-align: center;">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Food Type</th>
      <th scope="col">Details</th>
      <th scope="col">Quantity</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th> 
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($viewfood as $key=>$food)
    <tr >
    <td style="text-align: center;">{{$key+1}}</td>
    <td style="text-align: center;">{{$food->name}}</td>
    <td style="text-align: center;">{{$food->food_type}}</td>
    <td style="text-align: center;">{{$food->details}}</td>
    <td style="text-align: center;">{{$food->quantity}}</td>
    <td style="text-align: center;">
      <img src="{{url('/uploads/food/'.$food->image)}}" style="width:100px;height:100px;">
    </td>
    <td style="text-align: center;">{{$food->price}}</td>
    <td style="text-align: center;">
        <a class="btn btn-primary" href="">Details</a>
        <a class="btn btn-info" href="{{route('admin.delete.food',$food->id)}}">Delete</a>
        <a class="btn btn-info" href="{{route('admin.edit.food',$food->id)}}">Edit</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection