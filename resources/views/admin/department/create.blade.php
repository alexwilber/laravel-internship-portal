@extends('admin.layouts.app')

@section('content')

<div class="container">
                 <form class="col s12" method="POST" action="/admin/department/create">
                      
                  <div class="form-group">
                    <label for="department_name" class="control-label">Department Name</label>
                    <input type="text" class="form-control" id="department_name" name="department_name" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="college_name" class="control-label">College Name</label>
                    <input type="text" class="form-control" id="college_name" name="college_name" required>
                  </div>
                  
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Add Department">
                  <a href="/admin/department/view" <button type="button" class="btn btn-default" >Cancel</button></a>
                  </div>
                </form>
</div>

@endsection