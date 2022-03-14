@extends('welcome')

@section('content')
<p>
  <a href="{{route('vet.create')}}" class="btn btn-success">Vet Form</a>
</p>

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Service Name</th>
      <th scope="col">Details</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>

    </tr>
   </thead>
    <tbody> 
    @foreach($vets as $key=>$vet)
    <tr>
  
      <td>{{$key+1}}</td>
      <td>{{$vet->service_name}}</td>
      <td>{{$vet->details}}</td>
      <td>{{$vet->price}}</td>
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