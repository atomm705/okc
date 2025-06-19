<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewDivision extends Model
{
    public function translation(){

        return $this->hasOne(NewDivisionTranslation::class, 'division_id', 'id')->where('locale', app()->getLocale());
    }

    public function admin_translation($lang){
        return $this->hasMany(NewDivisionTranslation::class, 'division_id', 'id')->where('locale', $lang)->first();
    }

    public function categories(){
        return $this->hasMany(NewCategory::class, 'division_id', 'id');
    }

}
