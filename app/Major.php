<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Major;

class Major extends Model
{
     public $fillable = ['major_name', 'department_id'];
    
      public function department() {
        return $this->belongsTo('App\Department', 'department_id', 'id');
    }
    
    public function students(){
        return $this->hasMany(Major::class);
        
    }
}
