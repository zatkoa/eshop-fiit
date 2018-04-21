<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function deliveries()
    {
        return $this->belongsTo('App\Delivery');
    }

    public function payments()
    {
        return $this->belongsTo('App\Payment');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps()->withPivot('quantity');
    }
}
