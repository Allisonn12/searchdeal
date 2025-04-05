<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarInsureModel extends Model
{
    protected $table = 'car_insurance';
    protected $fillable = ['firstname', 'lastname', 'phone1', 'email', 'gender', 
    'currentinsurer', 'vehiclemake', 'language', 'status', 'channel', 'product', 'affiliateshortcode', 'Leadsource', 'offer_id'];
}
