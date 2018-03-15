@extends('layouts.app')

@section('content')
  
<div class="container">
    
    @foreach ($employer as $i)
    <h2>{{$i->company_name}}</h2>
    @endforeach
    
    
  <dl class="dl-horizontal">
@foreach ($employer as $add)
  <dt>Date Created:</dt>
  <dd>{{$add->created_at}}</dd>
  <dt>Location:</dt>
  <dd>{{$add->street}}, {{$add->city}}</dd>
@endforeach


@foreach ($employer as $i)
    <dt>Description:</dt>
     <dd>{{$i->description}}</dd>
     <br /> 
   @endforeach
</dl>

</div>




@endsection
