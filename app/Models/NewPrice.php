<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewPrice extends Model
{
    public function translation(){
        return $this->hasOne(NewPriceTranslation::class, 'price_id', 'id')->where('locale', app()->getLocale());
    }

    public function admin_translation($lang){
        return $this->hasMany(NewPriceTranslation::class, 'price_id', 'id')->where('locale', $lang)->first();
    }

    public function group(){
        return $this->hasOne(NewService::class, 'id', 'service_id');
    }

}
