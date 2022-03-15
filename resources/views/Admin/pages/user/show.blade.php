@extends('welcome')
@section('content')
<h2>User Details</h2>
<div>
    <p>
        <img style="" src="{{url('/uploads/users/'.$usershow->image)}}" alt="">
    </p>
    <p><h5>User Name: <span style="font-style: initial">{{$usershow->name}}</span></h5></p>
    <p><h4>User Email: <span style="">{{$usershow->email}}</span></h4></p>
    <p><h4>User Contact: <span style="">{{$usershow->phone}}</span></h4></p>
</div>
@endsection