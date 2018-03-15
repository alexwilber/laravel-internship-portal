@extends('layouts.app')

@section('content')
  
<div class="container">
@foreach ($employer as $i)
<?php
  Session::set('user_id', $i->user_id );
?>
@endforeach 


    
    @foreach ($employer as $i)
    <h2>{{$i->company_name}}</h2>
    <p>{{$i->state}}</p><br>
    <p>{{$i->city}}</p><br>
    <p>{{$i->description}}</p> <br>
    @endforeach
    
  
</div>

@endsection
