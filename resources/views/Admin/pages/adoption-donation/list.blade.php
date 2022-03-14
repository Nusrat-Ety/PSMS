@extends('welcome')

@section('content')
<p>
  <a href="{{route('adoption.donation.create')}}" class="btn btn-success">DOnation Form</a>
</p>

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Pet's Category</th>
      <th scope="col">Pet's Breed</th>
      <th scope="col">Pet's Age</th>
      <th scope="col">Quantity</th>
      <th scope="col">Health condition</th>
      <th scope="col">Vaccine Date</th>
      <th scope="col">Vaccine Dose</th>
      <th scope="col">Image</th>
      
    </tr>
   </thead>
    <tbody> 
    @foreach($donations as $key=>$donation)
    <tr>
  
      <td>{{$key+1}}</td>
      <td>{{$donation->name}}</td>
      <td>{{$donation->email}}</td>
      <td>{{$donation->address}}</td>
      <td>{{$donation->phone}}</td>
      <td>{{$donation->types->name}}</td>
      <td>{{$donation->breeds->name}}</td>
      <td>{{$donation->age}}</td>
      <td>{{$donation->quantity}}</td>
      <td>{{$donation->health}}</td>
      <td>{{$donation->vaccine_date}}</td>
      <td>{{$donation->vaccine_dose}}</td>
     
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