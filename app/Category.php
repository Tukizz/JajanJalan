<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'mi_resto_category';
    protected $primaryKey = 'categoryId';

    public function branch()
    {
         return $this->hasMany('App\Branch');
    }
}
