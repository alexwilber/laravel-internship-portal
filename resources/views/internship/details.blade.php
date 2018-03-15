@extends('layouts.app')

@section('content')
  
<div class="container">
    
    @foreach ($internship as $i)
    <h2>{{$i->name}}</h2>
    @endforeach
    
    
  <dl class="dl-horizontal">
@foreach ($address as $add)
  <dt>Date Posted:</dt>
  <dd>{{$add->created_at}}</dd>
  <dt>Location:</dt>
  <dd>{{$add->street}}, {{$add->city}}</dd>
@endforeach


@foreach ($internship as $i)
    <dt>Company Name:</dt>
     <dd>{{$i->name}}</dd>
    @endforeach
</dl>

 <dl class="dl-horizontal">


@foreach ($internship as $i)
    <dt>Description:</dt>
     <dd>{{$i->description}}</dd>
     <br />
     <dt>Requirements:</dt>
     <dd>{{$i->requirements}}</dd>
     <br />
     <dt>Skills:</dt>
     <dd>{{$i->skills}}</dd>
   @endforeach
</dl>

<!-- Apply -->

             @if (Auth::guest())
            <div><a href="/login"><button type="button" class="btn btn-primary pull-right" href="">
              Apply Now 
            </button></a></div>
            @else
            <div><button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#apply">
              Apply Now
            </button></div>
            @endif
            
            
            <!-- Apply-->
            
            <div class="modal fade" id="apply" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Apply</h4>
                  </div>
                  <form class="col s12" method="POST" action="#">
                      
                  <div class="form-group">
                    <label for="name" class="control-label">Student Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="email" class="control-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                  </div>
                  
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Apply">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
                </form>
                 
                </div>
              </div>
            </div>
</div>




@endsection
