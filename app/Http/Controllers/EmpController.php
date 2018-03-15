<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Employer;
use App\Internship;
use Auth;

class EmpController extends Controller
{
    // Allow only admin users to access this page 
    public function __construct()
    {
        $this->middleware('employer');
    }
    
    public function index()
    {
        //return view('employer.index');
        return view('employer.index', [
            'companies' => Employer::take(4)->get()
        ]);
    }
    // Get create page
    public function createProfile(){
        return view('employer.profile.create');
    }
    
    // post
    public function storeProfile(Request $request){
        
        $this->validate($request, [
            'logo' => 'required',
            'description' => 'required',
            
            ]);
        
        
        $employer = new Employer;
        $employer->user_id = Auth::user()->id;
        $employer->employer_name = $request->input('employer_name');
        $employer->logo = $request->input('logo');
        $employer->description = $request->input('description');
        $employer->city = $request->input('city');
        $employer->state = $request->input('state');
        
        
             
        $employer->save();
        
        return redirect('/employer/profile/profile');
     
        
    }
    //View edit form
      public function editProfileForm(Department $department) {
        return view('admin.department.edit', compact('department'));
    }
     //patch
    public function editProfile(Request $request, Department $department) {
        $department->update($request->all());
        
        return redirect('/admin/department/view');
    
    }

    //Wiev profile 
     public function profiles()
    {
        return view('employer.profile.profile', [
            'viewProfiles' =>Employer::where('user_id', '=', Auth::user()->id)->get()
        ]);
        
        
    }
    
    // DELETE
    public function destroyEmp(Request $request, Department $department) {
        $department->delete($request->all());
        return back();
    }
    
    //**************************************INTERNSHIPS******************************************//
    // Get create page
    public function createInternship(){
        return view('employer.internship.create');
    }
    
    // post
    public function storeInternship(Request $request){
        
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            
            ]);
        $address = new Address;
        
        $address->street = $request->input('street');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->zip = $request->input('zip');
        
        $address->save();
        $address_id = Address::find(DB::table('addresses')->max('id'));
        
        
        
        //get max address id
        //$address_id = Orders::find(DB::table('addresses')->max('id'));
        
        $internship = new Internship;
        $internship->user_id = Auth::user()->id;
        $internship->name = $request->input('name');
        $internship->description = $request->input('description');
        
        $internship->save();
        //Session::flash('status', 'User was added');
        return redirect('/employer/internship/view');
     
        
    }
    
    
    
}
