<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
     protected $table = 'mi_brand';
    protected $primaryKey = 'brandId';

    public function company()
    {
        return $this->belongsTo('App\Company','companyIdFK');
    }
    public function user()
    {
         return $this->belongsTo('App\User','brandEnteredById');
    }
    public function branch()
    {
         return $this->belongsTo('App\Branch','branchIdFK');
    }
    
}
