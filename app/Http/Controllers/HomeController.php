<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Employer;
use App\Internship;
use App\Address;
use Illuminate\Support\Str;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        
        return view('home', [
            'companies' => Employer::get()
        ]);
    }
     //list all the internships
    public function internships()
    {
        return view('internship.view', [
            'viewInternships' =>Internship::orderBy('name', 'asc')->distinct('id')->paginate(10)
        ]);
        
    }
     //list all the companies
    public function companies()
    {
        return view('companies.view', [
            'viewCompanies' =>Employer::orderBy('company_name', 'asc')->distinct('id')->paginate(10)
        ]);
        
    }
     public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'max:255'    
        ]);
        
        
        $search = $request->input('search');
       
        $internship = Internship::where('name', 'LIKE', '%' .$search. '%');
        
        
        return view('internship.searchRes', [
            'viewInternships' =>$internship->orderBy('name', 'asc')->distinct('id')->paginate(10)
        ]);
        
    }
    
    // get internship details page
    public function internshipDetails(Internship $internship)
    {
         //$employer = compact('employer');
         //$address_id = Session::get('address_id');
         
        
         $address = Address::where('id', '=', $internship->address_id)->get(); //need to fix id 
         //$employer = Employer::where('id', '=', $internship->address_id)->get(); 
         return view('internship.details', [
            'address' =>$address,
            'internship' =>compact('internship')
            
        ]);
        
       //return view('schools.details', compact('school'));
    }
    
    
    // get internsh details page
    public function employerDetails(Employer $employer)
    {
         
         return view('companies.details', [
            
            'employer' =>compact('employer')
            
        ]);
        
       //return view('schools.details', compact('school'));
    }
    
    
    //View edit form
      //public function internshipDetails(Internship $internship) {
      //  return view('internship.details', compact('internship'));
   // }
    
    
    // READ
    //public function view() {
    //    return view('admin.major.view', [
    //        'majors' => Major::orderBy('major_name', 'asc')->get()
    //    ]);
   // }
    
    //get employers page
    
    
}
