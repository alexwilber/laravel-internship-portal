<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Resume;
use App\Major;
use App\Student;
use App\Internship;
use App\Employer;
use Auth;

class StudentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('student');
    }
    
    
   //**************************************PROFILE******************************************//
    
    public function index()
    {
         return view('student.index', [
            'companies' => Employer::take(4)->get()
        ]);
        
    }
    
     // CREATE
    // get
    public function createStudentPro(){
        return view('student.profile.create', [
            'majors' =>Major::orderBy('major_name', 'asc')->get()
        ]);
    }
    
    //list all the departments
     public function profiles()
    {
        return view('admin.major.view', [
            'viewProfiles' =>Major::orderBy('major_name', 'asc')->distinct('id')->paginate(10)
        ]);
    }
    
    // post
    public function storeStudentPro(Request $request){
        
        /*
        $this->validate($request, [
            'name' => 'max:255',
            'email' => 'email'
        ]);
        */
        
        $major = Major::where('major_name', $request->input('major'))->first();
        $student = new Student;

        $student->user_id = Auth::user()->id;
        $student->college_name = $request->input('college_name');
        $student->city = $request->input('city');
        $student->state = $request->input('state');
        
        // If they submitted a resume
        if ($request->hasFile('resume')) {
            // Add resume

            
            $file = $request->file('resume');
            $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            
            $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $name = $name.date('yyyy:h:m:s').'.'.$extension;
            $name = str_replace(' ', '', $name);
            
            // Add resume record
            $resume = new Resume;
            $resume->user_id = Auth::user()->id;
            $resume->document_name = $name;
            
            $resume->document = $_SERVER['DOCUMENT_ROOT'].'/resumes/'.$name;
            $resume->save();
            //TODO: DOWNLOAD
            //https://laravel.com/docs/5.3/responses#file-responses
            $request->file('resume')->move($_SERVER['DOCUMENT_ROOT'].'/resumes/', $name);
        }
        
        $major->students()->save($student);
        return redirect('/student');
        
    }
    
    //View profileDetails
     public function studentProfiles()
    {
        return view('student.profile.profile', [
            'viewStudentProfiles' =>Student::where('user_id', '=', Auth::user()->id)->get(),
            'majors' =>Major::where('id', '=', 'id' )->get(), 'resume'=>Resume::where('user_id', '=', Auth::user()->id)->get()
        ]);
        
        
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
    
    ///////////////////////////////////////////////////////////////
    
    //list all the internships
    public function internships()
    {
        return view('student.internship.view', [
            'viewInternships' =>Internship::orderBy('name', 'asc')->distinct('id')->paginate(10)
        ]);
        
        
    }

}
