<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewDoctor extends Model
{
    public function translation(){
        return $this->hasOne(NewDoctorTranslation::class, 'doctor_id', 'id')->where('locale', app()->getLocale());
    }

    public function admin_translation($lang){
        return $this->hasMany(NewDoctorTranslation::class, 'doctor_id', 'id')->where('locale', $lang)->first();
    }

    public function translations(){
        return $this->hasMany(NewDoctorTranslation::class, 'doctor_id', 'id');
    }
}
