@extends('admin.layouts.app')

@section('content')

<div class="container">
  <h2>Department List</h2>
  <table class="table">
 <button class="btn btn-primary" onclick="window.location.href='/admin/department/create'">Create Department</button>

    <thead>
      <tr>
        <th>Department Name</th>
        <th>School Name</th>
      </tr>
    </thead>
     @foreach ($viewDepartments as $d)
    <tbody>
      <tr>
        <td>{{ $d->department_name }}</td>
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
  {!! $viewDepartments->links() !!}
</div>

@endsection
