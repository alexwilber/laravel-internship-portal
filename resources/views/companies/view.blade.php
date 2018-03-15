@extends('layouts.app')

@section('content')

<div class='container'>
    <h2>Employer List</h2>
    <table class ='table'>
        
        <thread>
            <tr>
                <th>Company Name</th>
                <th>State</th>
                <th>City</th>
                <th>Description</th>
                <th>Created At</th>
            </tr>
        </thread>
        @foreach ($viewCompanies as $i)
        <tbody>
            <tr>
            <td>{{ $i->company_name}} </td>
            <td>{{ $i->state}} </td>
            <td>{{ $i->city}}</td>    
            <td>{{ $i->description}}</td>
            <td>{{ $i->created_at}}</td>
               
            <td>
          <p><a href="/companies/{{$i->id}}" class="btn btn-primary" role="button">View</a></p>
            
            </td> 
            
       </tr>
        
        </tbody>
    @endforeach
    </table>
    {!! $viewCompanies->links() !!}
</div>
@endsection