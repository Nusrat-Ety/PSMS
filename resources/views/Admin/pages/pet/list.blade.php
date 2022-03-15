@extends('welcome')
@section('content')

<div class="contaienr">
<a href="{{route('breed.create')}}" style="text-decoration: none;"><button class="btn btn-success">Breed</button> </a> 
<a href="{{route('type.create')}}" style="text-decoration: none;"><button class="btn btn-success">Pet Type</button> </a> 
</div>
  @endsection