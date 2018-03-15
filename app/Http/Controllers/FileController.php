<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Controllers\File;
use App\User;

class FileController extends Controller
{
    function index() {
        return view('student.uploadForm');
    }
    
    
    function uploadFile(Request $request) {
        $file = $request->file('resume');
        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $name= str_replace(' ', '', $name);
        
        //echo $name;
        echo $name.date('yyyy:h:m:s').'.'.$extension;
        echo $_SERVER['SERVER_NAME'].'/public/';
        
        //$request->file('resume')->move($_SERVER['DOCUMENT_ROOT'].'/resumes/', $name.date('yyyy:h:m:s').'.'.$extension);
        //echo $file->getClientOriginalName().date('yyyy:h:m:s');
        //echo $_SERVER['DOCUMENT_ROOT'].'/'.$name.date('yyyy:h:m:s').'.'.$extension;
    }
}
