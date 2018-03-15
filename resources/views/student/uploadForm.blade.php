@extends('student.layouts.app')

@section('content')
    <form name="uploadForm" method="POST" action="/student/upload" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="filename"/>
        <input type="file" name="resume"/>
        <input type="submit" value="Submit"/>
    </form>
@endsection