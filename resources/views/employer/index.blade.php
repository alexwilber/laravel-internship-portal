@extends('employer.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Internship Portal
                <small>Of Alfred State College</small>
                
            </h1>
            
        </div>
    </div>
    
    
     <div class="panel panel-default ">
                <div class="panel-heading">
                    
                    <form class="form-inline" method="GET" action="/internship/searchRes" >
                        <input type="text" name="search" class="form-control" placeholder="Search" style="width: 50%;"/>

                        
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
    
                    </form> 
              
                </div>
        
              
            
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-responsive" src="http://bestoftens.com/wp-content/uploads/2015/02/how-to-answer-job-interview-questions.jpg" alt="..." width="100%">
        </div>

        <div class="col-md-4">
            <h3> Job Search</h3> Description</h3>
            <p>Welcome to the Job search panel for Alfred State College. While you're here, you can search for a specific job, make your own resume, or find other students
            who are similar to your own skill set!  Getting Started is as simple as these four steps:</p>
            <ul>
                <li>Register your Account</li>
                <li>Log into the account you created</li>
                <li>Upload or create your resume</li>
                <li>Start applying for jobs or search for other students!</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Popular Job Postings</h3>
        </div>

         @foreach ($companies as $emp)
        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="{{ $emp->logo }}" alt="..." style="height: 150px;" width="100%">
            <div class="caption">
              <h3>{{ $emp->company_name }}</h3>
              <p>{{ $emp->city }}, {{ $emp->state }}</p>
              <!--<p><a href="/schools/school/{{ $emp->id}}" class="btn btn-primary" role="button">View</a></p>
              <p><a href="#" class="btn btn-primary" role="button">Select</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
            </div>
          </div>
        </div>
        @endforeach 

    </div>
    <!-- /.row -->

    <hr>
</div>
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Internship Portal 2016</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>



@endsection
