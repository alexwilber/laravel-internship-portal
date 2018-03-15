@extends('layouts.app')

@section('content')

  
<div class="container">
  <h2>Internship List</h2>
  <table class="table">

    <thead>
      <tr>
        <th>Job Title</th>
        <th>Job Description</th>
        <th>Time Posted</th>
      </tr>
    </thead>
     @foreach ($viewInternships as $i)
    <tbody>
      <tr>
        <td>{{ $i->name }}</td>
        <td>{{ \Illuminate\Support\Str::words($i->description, 15) }}</td>
        <td>{{ $i->created_at }}</td>
        
        <td>
          <p><a href="/internship/{{$i->id}}" class="btn btn-primary" role="button">View</a></p>
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
  {!! $viewInternships->links() !!}
</div>

@endsection
