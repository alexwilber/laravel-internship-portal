<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employer;
use App\Address;
use App\User;

class Internship extends Model
{
    
    public $fillable = ['address_id', 'user_id', 'name', 'description', 'requirements', 'skills'];
    
       
     public function addresses() {
        return $this->belongsTo('App\Address', 'address_id', 'id');
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
