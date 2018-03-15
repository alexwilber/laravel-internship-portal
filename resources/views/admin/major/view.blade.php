@extends('admin.layouts.app')

@section('content')

<div class="container">
  <h2>Major List</h2>
  <table class="table">
 <button class="btn btn-primary" onclick="window.location.href='/admin/major/create'">Create Major</button>
    <thead>
      <tr>
        <th>Major Name</th>
        <th>Department Id</th>
      </tr>
    </thead>
     @foreach ($viewMajors as $m)
    <tbody>
      <tr>
        <td>{{ $m->major_name }}</td>
        <td>{{ $m->department_id }}</td>
        
        <td><a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/major/{{$m->id}}">Edit</a></td>
        <td>
            <form action="/admin/major/{{$m->id}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                
                <button class="btn btn-primary" name="delete">Delete</button>
                </form>
             
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
  {!! $viewMajors->links() !!}
</div>

@endsection
