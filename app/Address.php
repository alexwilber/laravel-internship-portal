<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
     
    public $fillable = ['street', 'city', 'state', 'zip'];
    
     public function internships() {
        return $this->hasMany(Internship::class);
        
    }
    

     /**
     * Scope a query to only include popular users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
   
}
