<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewDoctorDepartment extends Model
{
    public function doctors(){
        return $this->hasMany(NewDoctor::class, 'id', 'doctor_id');
    }
}
