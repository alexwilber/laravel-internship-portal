@extends('employer.layouts.app')

@section('content')

  
<div class="container">
  <h2>Internship List</h2>
  <table class="table">
 <button class="btn btn-primary" onclick="window.location.href='/employer/internship/create'">Create Internship</button>

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
        
        <td><a class="btn-floating btn-large waves-effect waves-light blue" href="/employer/internship/{{$i->id}}">Edit</a></td>
        <td>
            <form action="/employer/internship/{{$i->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                
                <button class="btn btn-primary" name="delete">Delete</button>
                </form>
             
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
  {!! $viewInternships->links() !!}
</div>

@endsection
