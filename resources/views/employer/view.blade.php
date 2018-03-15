@extends('layouts.app')

@section('content')
  
<div class="container">
  <h2>Employer List</h2>
  <table class="table">

    <thead>
      <tr>
        <th>Company Name</th>
        <th>State</th>
        <th>City</th>
        <th>Description</th>
      </tr>
    </thead>
     @foreach ($viewEmployers as $i)
    <tbody>
      <tr>
        <td>{{ $i->company_name }}</td>
        <td>{{ $i->state }}</td>
        <td>{{ $i->city }}</td>
        <td>{{ $i->description }}</td>
        
        <td>
          <p><a href="/employer/{{$i->id}}" class="btn btn-primary" role="button">View</a></p>
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
  {!! $viewEmployers->links() !!}
</div>

@endsection
