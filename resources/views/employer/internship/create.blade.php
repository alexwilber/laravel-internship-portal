@extends('employer.layouts.app')

@section('content')

<div class="container">
                 <form class="col s12" method="POST" action="/employer/internship/create">
                      
                  <div class="form-group">
                    <label for="name" class="control-label">Job Title</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="description" class="control-label">Description</label>
                    <!--<input type="text" class="form-control" id="description" name="description" required>-->
                    <textarea class="form-control" rows="5" id="description" name="description" required></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="requirements" class="control-label">Requirements</label>
                    <!--<input type="text" class="form-control" id="requirements" name="requirements" required>-->
                    <textarea class="form-control" rows="5" id="requirements" name="requirements" required></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="skills" class="control-label">Skills</label>
                    <!--<input type="text" class="form-control" id="skills" name="skills" required>--->
                    <textarea class="form-control" rows="5" id="skills" name="skills" required></textarea>
                  </div>
                  <h3>Address</h3>
                  <div class="form-group">
                    <label for="street" class="control-label">Street</label>
                    <input type="text" class="form-control" id="street" name="street" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="city" class="control-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="state" class="control-label">State</label>
                    <input type="text" class="form-control" id="state" name="state" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="zip" class="control-label">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" required>
                  </div>
                  
                  
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Add Job">
                  <a href="/admin/department/view" <button type="button" class="btn btn-default" >Cancel</button></a>
                  </div>
                </form>
</div>

@endsection
