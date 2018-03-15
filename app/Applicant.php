<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Internship;

class Applicant extends Model
{
    public $fillable = ['user_id', 'internship_id'];
    
      public function internships() {
        return $this->belongsTo('App\Internship', 'internship_id', 'id');
    }
    
    public function users() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    
    /**
     * Scope a query to only include popular users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
}
