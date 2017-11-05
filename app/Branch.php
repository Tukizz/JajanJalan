<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'mi_branch';
    protected $primaryKey = 'branchId';

    public function company()
    {
        return $this->belongsTo('App\Company','companyIdFK');
    }
    public function user()
    {
        return $this->belongsTo('App\User','branchEnteredById');
    }
    public function category()
    {
        return $this->belongsTo('App\Category','branchCategory');
    }
    public function review()
    {
         return $this->hasMany('App\Review','branchId');
    }
}
