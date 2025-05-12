<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DivisionCategory extends Model
{
    public function category(){
        return $this->hasOne(ArticleCategory::class, 'category_id', 'category_id');
    }
}
