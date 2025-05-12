<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorDepartment extends Model
{
    protected $table = 'doctors_departments';
    protected $primaryKey = 'department_id';
    public $timestamps = true;

    protected $fillable = [
        'image_id',
        'position',
        'is_visible',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'image_id');
    }

    public function translations()
    {
        return $this->hasMany(DoctorDepartmentTranslation::class, 'department_id', 'department_id');
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctors_doctors_departments', 'department_id', 'doctor_id')
            ->withPivot('work_hours');
    }
}
