@extends('admin.layouts.app')

@section('content')

<div class="container">
                 <form class="col s12" method="POST" action="/admin/department/{{ $department->id }}">
                 {{ method_field('PATCH') }}
                 
                  <div class="form-group">
                    <label for="department_name" class="control-label ">Department Name</label>
                     <input type="text" name="department_name" value="{{ $department->department_name }}">
                  </div>
                  
                  <div class="form-group">
                    <label for="college_name" class="control-label">College Name</label>
                     <input type="text" name="college_name" value="{{ $department->college_name }}">
                  </div>
                  
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Update Department">
                  <a href="/admin/department/view" <button type="button" class="btn btn-default" >Cancel</button></a>
                  </div>
                </form>
</div>

@endsection
