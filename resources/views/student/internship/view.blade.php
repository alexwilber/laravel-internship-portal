@extends('student.layouts.app')

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
        <td>{{ \Illuminate\Support\Str::words($i->description, 20) }}</td>
        <td>{{ $i->created_at }}</td>
        
        <td>
            <form action="/student/internship/{{$i->id}}" method="POST">
                </form>
             
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
  {!! $viewInternships->links() !!}
</div>

@endsection
