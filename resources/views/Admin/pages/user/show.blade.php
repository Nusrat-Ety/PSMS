@extends('welcome')
@section('content')
<h2>User Details</h2>
<div>
    <p>
        <img style="" src="{{url('/uploads/'.$usershow->image)}}" alt="">
    </p>
    <p>User Name:</p>
</div>
@endsection