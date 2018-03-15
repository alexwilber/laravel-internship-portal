<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Department;
use App\Major;
use App\Employer;
use App\Student;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     
     // Allow only admin users to access this page 
    public function __construct()
    {
        $this->middleware('admin');
    }
     
    public function index()
    {
        //return view('admin.index');
         return view('admin.index', [
            'companies' => Employer::take(4)->get()
        ]);
    }
    
    
    
    //**************************************DEPARTMENT******************************************//
    // Get create page
    public function create(){
        return view('admin.department.create');
    }
    
   
    // post
    public function store(Request $request){
        
        $this->validate($request, [
            'department_name' => 'required',
            'college_name' => 'required',
            
            ]);
        
        
        $department = new Department;
        
        $department->department_name = $request->input('department_name');
        $department->college_name = $request->input('college_name');
        
             
        $department->save();
        //Session::flash('status', 'User was added');
        return redirect('/admin/department/view');
     
        
    }
    //View edit form
      public function editDepForm(Department $department) {
        return view('admin.department.edit', compact('department'));
    }
     //patch
    public function editDep(Request $request, Department $department) {
        $department->update($request->all());
        
        return redirect('/admin/department/view');
    
    }
    
    //list all the departments
     public function departments()
    {
        return view('admin.department.view', [
            'viewDepartments' =>Department::orderBy('department_name', 'asc')->distinct('id')->paginate(10)
        ]);
        
        
    }
    
     // DELETE
    public function destroyDep(Request $request, Department $department) {
        $department->delete($request->all());
        return back();
    }
    
    
    //**************************************MAJOR******************************************//
    // Get create page
    
    
     // CREATE
    // get
    public function createMajor(){
        return view('admin.major.create', [
            'departments' => Department::orderBy('department_name', 'asc')->get()
        ]);
    }
    
    //list all the departments
     public function majors()
    {
        return view('admin.major.view', [
            'viewMajors' =>Major::orderBy('major_name', 'asc')->distinct('id')->paginate(10)
        ]);
    }
    
    // post
    public function storeMajor(Request $request){
        
        $department = Department::where('department_name', $request->input('department'))->first();
        $major = new Major;
        
        $major->major_name = $request->input('major_name');
        
        
        $department->majors()->save($major);
        
        return redirect('/admin/major/view');
        
    }

    // READ
    public function view() {
        return view('admin.major.view', [
            'majors' => Major::orderBy('major_name', 'asc')->get()
        ]);
    }
    
    //UPDATE
    //get
    public function editMajorForm(Major $major) {
        return view('admin.major.edit', compact('major'));
    }
    
    //patch
    public function editMajor(Request $request, Major $major) {
        $major->update($request->all());
        
        return redirect('/admin/major');
    
    }
    
    // DELETE
    public function destroyMajor(Request $request, Major $major) {
        $major->delete($request->all());
        return back();
    }
    public function employerDetails(Employer $employer)
    {
        // $address = Address::where('id', '=', $internship->address_id)->get(); //need to fix id 
         
         return view('employer.details', [
            'employer_name' =>$employer_name,
            'state' =>$employer_name,
            'city' =>$employer_name,
            'description' =>$employer_name,
            'employer' =>compact('employer')
            
        ]);
        
       //return view('schools.details', compact('school'));
    }
    
     //**************************************STUDENT******************************************//
    
    // Get  create page
    
    // CREATE
    // get
    
    
    //list all the departments only this
    
    public function students(){
        return view('admin.students.view', [
                'viewStudents' =>Student::orderBy('user_id', 'asc')->distinct('id')->paginate(10)
            ]);
    }
    
    
      
  //**************************************Employer******************************************//  
    
//list all the employees
    public function employers(){
        return view('admin.employer.view', [
            'viewEmployers' => Employer::orderBy('company_name', 'asc')->distinct ('id')->paginate(10)
            ]);
    }
    
}
