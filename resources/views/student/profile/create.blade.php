@extends('student.layouts.app')

@section('content')

<div class="container">
                <h2>Create Profile</h2>
                 <form class="col s12" method="POST" action="/student/profile/create" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label>Browser Select</label>
                    <select class="browser-default" name="major">
                      <option disabled selected>Choose a Major</option>
                      @foreach ($majors as $m)
                      <option>{{ $m->major_name }}</option>
                      @endforeach
                    </select>
                  </div>    
                  
                  <div class="form-group">
                    <label for="college_name" class="control-label">College Name</label>
                    <input type="text" class="form-control" id="college_name" name="college_name" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="city" class="control-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="state" class="control-label">State</label>
                    <input type="text" class="form-control" id="state" name="state" required>
                  </div>
                  
                  <!--File upload-->
                  <div class="form-group">
                    <label for="resume">Resume Upload</label>
                    <input type="file" name="resume"/>
                  </div>
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Create Profile">
              
                  </div>
                </form>
</div>

@endsection