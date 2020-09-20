<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id','users_id','additional_visa','transactional_total','transactional_status'
    ];

    protected $hidden = [

    ];

    public function details()
    {
        // yang berarti transaction punya beberapa transaction detail
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }

    public function travel_package()
    {
        // yang berarti travel package punya beberapa transaction
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }


    public function user()
    {
        // yang berarti user mempunyai beberapa transaction
        return $this->belongsTo(User::class, 'users_id', 'id');
    }


}
