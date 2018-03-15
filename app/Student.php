<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Major;
use App\User;


class Student extends Model
{
     public $fillable = ['college_name', 'user_id', 'major_id', 'city', 'state'];
      
    
    public function users() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    public function internships(){
        return $this->hasOne(Resume::class);
        
    }
    
    public function majors() {
        return $this->belongsTo('App\Major', 'major_id', 'id');
    }
    
}
