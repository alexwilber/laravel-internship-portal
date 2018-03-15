<?php
use App\Employer;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('welcome', [
            'companies' => Employer::take(4)->get()
        ]);
});
Route::get('internship/view', 'HomeController@internships');
Route::get('companies/view', 'HomeController@companies');
//Search result page
Route::get('/internship/searchRes', 'HomeController@search');
//Route::auth();
//department details page
Route::get('/internship/{internship}','HomeController@internshipDetails');
Route::get('/companies/{companies}','HomeController@employerDetails');

Route::get('/home', 'HomeController@index');
//*******************UNAUTHENTICATED///////////
//view internships



///***********************************************ADMIN************************************************///
///****************************************************************************************************///
Route::group(['middleware' => ['web']], function() {

//Allow only admin users to access these routs.
Route::auth();


Route::get('admin', 'AdminController@index');
Route::get('admin/department/view', 'AdminController@departments');
Route::get('admin/employer/view', 'AdminController@employers');
Route::get('admin/student/view', 'AdminController@students');

//******************* DEPARTMENT////////


// Creating departments
Route::get('admin/department/create', 'AdminController@create');
Route::post('admin/department/create', 'AdminController@store');


//view edit-form page
Route::get('admin/department/{department}', 'AdminController@editDepForm');
Route::patch('admin/department/{department}', 'AdminController@editDep');

//department details page
Route::get('/department/{department}','AdminController@details');

// Delete Department
Route::delete('admin/department/{department}', 'AdminController@destroyDep');


//*******************MAJOR////////
// Get majors
Route::get('admin/major/view', 'AdminController@majors');


Route::get('admin/major/create', 'AdminController@createMajor');
Route::post('admin/major/create', 'AdminController@storeMajor');
//view edit-form page
Route::get('admin/major/{major}', 'AdminController@editMajorForm');
Route::patch('admin/major/{major}', 'AdminController@editMajor');

// Delete Major
Route::delete('admin/major/{major}', 'AdminController@destroyMajor');
   

////////Employer
Route::get('/employer/{employer}','AdminController@employerDetails');
});


///***********************************************Employer************************************************///
///****************************************************************************************************///
Route::group(['middleware' => ['web']], function() {

//Allow only admin users to access these routs.
Route::auth();


Route::get('employer', 'EmployerController@index');
Route::get('employer/internship/view', 'EmployerController@internships');

//******************* PROFILE////////

// Creating major
Route::get('employer/profile/profile', 'EmployerController@profiles');
// Creating PROFILES
Route::get('employer/profile/create', 'EmployerController@createProfile');
Route::post('employer/profile/create', 'EmployerController@storeProfile');


//view edit-form page
Route::get('employer/profile/{profile}', 'EmployerController@editProfileForm');
Route::patch('employer/profile/{profile}', 'EmployerController@editProfile');

//profile details page
Route::get('/profiles/profile/{profile}','EmployerController@profileDetails');

// Delete Department
//Route::delete('admin/department/{department}', 'AdminController@destroyDep');


//*******************INTERNSHIPS////////
// Creating major
Route::get('admin/major/view', 'AdminController@majors');


Route::get('employer/internship/create', 'EmployerController@createInternship');
Route::post('employer/internship/create', 'EmployerController@storeInternship');
//view edit-form page
Route::get('employer/internship/{internship}', 'EmployerController@editInternshipForm');
Route::patch('employer/internship/{internship}', 'EmployerController@editInternship');

// Delete Major
Route::delete('employer/internship/{internship}', 'EmployerController@destroyInternship');
   
    
});


///***********************************************STUDENT************************************************///
///****************************************************************************************************///
Route::group(['middleware' => ['web']], function() {

//Allow only admin users to access these routs.
Route::auth();


Route::get('student', 'StudentController@index');
Route::get('student/internship/view', 'StudentController@internships');
Route::get('student/internship/{internship}', 'StudentController@editInternshipForm');
Route::patch('student/internship/{internship}', 'StudentController@editInternship');

//******************* PROFILE////////

// Creating major
Route::get('student/profile/profile', 'StudentController@studentProfiles');

// Creating PROFILES
Route::get('student/profile/create', 'StudentController@createStudentPro');
Route::post('student/profile/create', 'StudentController@storeStudentPro');


//view edit-form page
Route::get('student/profile/{profile}', 'StudentController@editProfileForm');
Route::patch('student/profile/{profile}', 'StudentController@editProfile');

//profile details page
Route::get('/StuProfiles/profile/{profile}','StudentController@profileDetails');

// Delete Department
//Route::delete('admin/department/{department}', 'AdminController@destroyDep');

//view internships
Route::get('student/internship/view', 'StudentController@internships');

//*******************INTERNSHIPS///////////

// Creating major
Route::get('student/major/view', 'AdminController@majors');


/************* FILE UPLOADS */

Route::get('student/upload', 'FileController@index');
Route::post('student/upload', 'FileController@uploadFile');

});



