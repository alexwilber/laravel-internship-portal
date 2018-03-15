@extends('admin.layouts.app')

@section('content')

<div class="container">
                 <form class="col s12" method="POST" action="/admin/major/{{ $major->id }}">
                 {{ method_field('PATCH') }}
                 
                 
                  <div class="form-group">
                    <label for="major_name" class="control-label ">Major Name</label>
                     <input type="text" name="major_name" value="{{ $major->major_name }}">
                  </div>
                  
                  <!--*** IMPORTANT ***-->
                  <div class="modal-footer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input class="btn btn-primary" type="submit" name="Submit" value="Update Major">
                  <a href="/admin/department/view" <button type="button" class="btn btn-default" >Cancel</button></a>
                  </div>
                </form>
</div>

@endsection
