<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    public function news_categories_id(){
        return $this->hasMany('App\NewsCategoryId');
    }
}
