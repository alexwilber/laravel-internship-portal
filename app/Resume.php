<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\User;

class Resume extends Model
{
    public $fillable = ['document', 'user_id'];
    
      public function students() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
