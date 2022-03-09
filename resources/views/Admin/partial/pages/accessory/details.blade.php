@extends('welcome')
@section('part')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ()
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <a class="btn btn-primary" href="">View</a>
        <a class="btn btn-primary" href="">Edit</a>
        <a class="btn btn-info" href="">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection