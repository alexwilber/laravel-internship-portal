<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Employer extends Model
{
    public $fillable = ['user_id', 'company_name', 'logo', 'description', 'city', 'state'];
    
    public function users() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
     public function internships() {
        return $this->hasMany(Internship::class);
        
    }
    
}
