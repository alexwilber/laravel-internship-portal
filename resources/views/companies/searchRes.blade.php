@extends('layouts.app')

@section('content')

  
<div class="container">
  <h2>Job List</h2>
  <table class="table">

    <thead>
      <tr>
        <th>Company Name</th>
        <th>Job Description</th>
        <th>Time Posted</th>
      </tr>
    </thead>
     @foreach ($viewEmployers as $i)
    <tbody>
      <tr>
        <td>{{ $i->company_name }}</td>
        <td>{{ \Illuminate\Support\Str::words($i->description, 15) }}</td>
        <td>{{ $i->created_at }}</td>
        
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