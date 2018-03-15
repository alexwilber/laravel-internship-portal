<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $fillable = ['department_name', 'college_name'];
    
    public function majors() {
        return $this->hasMany(Major::class);
        
    }
    
}
