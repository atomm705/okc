<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorDoctorDepartment extends Model
{
    protected $table = 'doctors_doctors_department';

    protected $guarded;

    public function department(){
        return $this->hasOne(DoctorDepartment::class, 'department_id', 'department_id');
    }

    public function doctor(){
        return $this->hasOne(Doctor::class, 'doctor_id', 'doctor_id');
    }
}
