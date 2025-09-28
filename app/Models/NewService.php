<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewService extends Model
{
    public function translation(){
        return $this->hasOne(NewServiceTranslation::class, 'service_id', 'id')->where('locale', app()->getLocale());
    }

    public function admin_translation($lang){
        return $this->hasMany(NewServiceTranslation::class, 'service_id', 'id')->where('locale', $lang)->first();
    }

    public function services(){
        return $this->hasMany(NewPrice::class, 'service_id', 'id')->where('is_visible', true);
    }

    public function category(){
        return $this->hasOne(NewCategory::class, 'id', 'category_id');
    }

    public function parent(){
        return $this->hasOne(NewService::class, 'id', 'group_id');
    }

    public function groups(){
        return $this->hasMany(NewService::class, 'group_id', 'id');
    }
  //  public function category()
   // {
  //      return $this->belongsTo(NewCategory::class, 'category_id', 'id');
  //  }
}
