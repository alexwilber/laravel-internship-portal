@extends('student.layouts.app')

@section('content')

<style>
        .hidden{
            position: absolute;
            left: -9999px;
        }
        
        #profile-image1 {
            cursor: pointer;
            
            width: 100px;
            height: 100px;
            border:2px solid #03b1ce; 
            
        }
        
     .tital{ 
                font-size:16px; font-weight:500;
                
            }
        
    .bot-border{
        border-bottom:1px #f8f8f8 solid; margin:5px 0 5px 0;
        }
        
    .main{
        position: absolute;
        right: 50px;
    }
</style>

<!--Page Script.--> 
<script>

   $(function() {
    $('#profile-image1').on('click', function() {
    $('#profile-image-upload').click();
     });
    });
</script>
    
  
  <div class="container-fluid">
  <div class="row">
  <div class="col-sm-3"> </div>
  <div class="col-md-5">
<div class="panel panel-default">
  <div class="panel-heading">  <h4 align="center">Student Profile Page</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
          @foreach ($majors as $m)
          <p>{{$m->major_name}}</p>
          @endforeach
          
            <div class="box-body">
                @foreach ($viewStudentProfiles as $emp)
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://d30y9cdsu7xlg0.cloudfront.net/png/35778-200.png" width="50" height="50"> 
                    
                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >click here to change profile image</div>
                <!--Upload Image Js And Css-->
                     </div>
              <br>

              <!-- /input-group -->
            </div>
             
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">{{ $emp->college_name }}</h4></span>
              <span><p>{{ $emp->city }}, {{ $emp->state }} </p></span>          
                @foreach($resume as $r) 
                    <a href="{{ $r->document }}" download="{{$r->document_name}}">Resume Download</a>
                @endforeach
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
            
              

     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >About US:</div><div class="col-sm-7">Dummy text</div>

@endforeach


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
  <div class="col-sm-3"></div>
   </div>
</div>
</div>
</div>
@endsection
 
        
        
        
        
        
        
        
        
        
        
        
        