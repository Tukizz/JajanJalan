<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'mi_review';
    protected $primaryKey = 'reviewId';

    public function user()
    {
         return $this->belongsTo('App\User','reviewById');
    }
    public function branch()
    {
         return $this->belongsTo('App\Branch','branchId');
    }
}
