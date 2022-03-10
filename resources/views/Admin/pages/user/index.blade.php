@extends('welcome')

@section('content')
<p>
  <a href="{{route('users.create')}}" class="btn btn-success">Create New User</a>
</p>

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      {{-- <th scope="col">Type_ID</th> --}}
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Role</th>
      <th scope="col">Image</th>
      <th scope="col">Handle</th>
      
    </tr>
   </thead>
    <tbody> 
    @foreach($users as $key=>$user)
    <tr>
  
      <td>{{$key+1}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->role->name}}</td>
      {{-- <td>{{$user->status}}</td> --}}
      <td>
        <img width="100px" src="{{url('/uploads/users/'.$user->image)}}" alt="">
      </td>

                   
     <td>
      
      <div style="display: flex;">
       <div style="padding-right: 10px;">

       <form action="{{route('users.destroy',$user->id)}}" method="post">
           @csrf
           @method('delete')
           <button type="submit" class="btn btn-light" style="color: rgb(228, 11, 11)">Delete</button>
       </form>

       </div>
      <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(32, 77, 51)" href="{{route('users.show',$user->id)}}">view</a></div>
      <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(32, 77, 51)" href="{{route('users.edit',$user->id)}}">Edit</a></div>
     </div>
    </td> 
    </tr>
    @endforeach
  </tbody>
</table>
@endsection