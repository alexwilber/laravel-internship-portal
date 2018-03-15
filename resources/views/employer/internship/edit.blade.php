@extends('employer.layouts.app')

@section('content')

<div class="container">
                 <form class="col s12" method="POST" action="/employer/internship/{{ $internship->id }}">
                 {{ method_field('PATCH') }}
                 
                  <div class="form-group">
                    <label for="name" class="control-label ">Job Title</label>
                     <input type="text" name="name" value="{{ $internship->name }}">
                  </div>
                  
                  <!--<div class="form-group">
                    <label for="description" class="control-label">Description</label>
                     <input type="text" name="description" value="{{ $internship->description }}">
                  </div>-->
                  
                  
                  <div class="form-group">
                    <label for="description" class="control-label">Description</label>
                    <!--<input type="text" class="form-control" id="description" name="description" required>-->
                    <textarea class="form-control" rows="5" id="description" name="description" value="{{ $internship->description }}"required></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="requirements" class="control-label">Requirements</label>
                    <!--<input type="text" class="form-control" id="requirements" name="requirements" required>-->
                    <textarea class="form-control" rows="5" id="requirements" name="requirements" value="{{ $internship->requirements }}" required></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="skills" class="control-label">Skills</label>
                    <!--<input type="text" class="form-control" id="skills" name="skills" required>--->
                    <textarea class="form-control" rows="5" id="skills" name="skills" value="{{ $internship->skills }}" required></textarea>
                  </div>
                  
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Update Internship">
                  <a href="/employer/internship/view" <button type="button" class="btn btn-default" >Cancel</button></a>
                  </div>
                </form>
</div>

@endsection
