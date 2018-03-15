@extends('admin.layouts.app')

@section('content')

<div class="container">
  <h2>Student List</h2>
  <table class="table">
 <button class="btn btn-primary" onclick="window.location.href='/admin/student/create'">Create Student</button>

    <thead>
      <tr>
        <th>Student Name</th>
        <th>Major</th>
        <th>School Name</th>
      </tr>
    </thead>
     @foreach ($viewStudents as $d)
    <tbody>
      <tr>
        <td>{{ $d->user_id }}</td>
        <td>{{ $d->major_id }}</td>
        <td>{{ $d->college_name }}</td>
        
        <td><a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/department/{{$d->id}}">Edit</a></td>
        <td>
            <form action="/admin/department/{{$d->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                
                <button class="btn btn-primary" name="delete">Delete</button>
                </form>
             
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
  {!! $viewStudents->links() !!}
</div>

@endsection
