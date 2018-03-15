@extends('admin.layouts.app')

@section('content')

<div class="container">
                 <form class="col s12" method="POST" action="/admin/major/create">
                      
                  <div class="form-group">
                    <label>Browser Select</label>
                    <select class="browser-default" name="department">
                      <option disabled selected>Choose a Department</option>
                      @foreach ($departments as $d)
                      <option>{{ $d->department_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="major_name" class="control-label">Major Name</label>
                    <input type="text" class="form-control" id="major_name" name="major_name" required>
                  </div>
                  
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Add Major">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
                </form>
</div>

@endsection
