@extends('employer.layouts.app')

@section('content')

<div class="container">
                 <form class="col s12" method="POST" action="/employer/profile/create">
                  
                  
                  <div class="form-group">
                    <label for="company_name" class="control-label">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" required>
                  </div>    
                  
                  <div class="form-group">
                    <label for="logo" class="control-label">Company Logo</label>
                    <input type="text" class="form-control" id="logo" name="logo" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="description" class="control-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="city" class="control-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="city" class="control-label">State</label>
                    <input type="text" class="form-control" id="state" name="state" required>
                  </div>
                  
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Create Profile">
              
                  </div>
                </form>
</div>

@endsection