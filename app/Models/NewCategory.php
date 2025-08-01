<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    public function translation(){
        return $this->hasOne(NewCategoryTranslation::class, 'category_id', 'id')->where('locale', app()->getLocale());
    }

    public function admin_translation($lang){
        return $this->hasMany(NewCategoryTranslation::class, 'category_id', 'id')->where('locale', $lang)->first();
    }

    public function translations(){
        return $this->hasMany(NewCategoryTranslation::class, 'category_id', 'id');
    }

    public function groups(){
        return $this->hasMany(NewService::class, 'category_id', 'id');
    }
    public function menu_groups(){
        return $this->hasMany(NewService::class, 'category_id', 'id')->where('is_group', true);
    }
    public function doctors(){
        return $this->belongsToMany(NewDoctor::class, 'new_doctor_departments', 'department_id', 'doctor_id')->orderBy('position', 'asc');
    }
}
