<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{

    public function translation(){
        return $this->hasMany(DivisionTranslation::class, 'division_id', 'id')->where('locale', app()->getLocale())->first();
    }

    public function admin_translation($lang){
        return $this->hasMany(DivisionTranslation::class, 'division_id', 'id')->where('locale', $lang)->first();
    }

    public function categoryies_count(){
        return $this->hasMany(DivisionCategory::class, 'division_id', 'id')->count();
    }

    public function categories(){
        return $this->hasMany(DivisionCategory::class, 'division_id', 'id');
    }

}
