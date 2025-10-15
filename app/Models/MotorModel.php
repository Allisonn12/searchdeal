<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotorModel extends Model
{
    protected $table = 'motor';
    protected $fillable = [
        'firstname', 
        'lastname', 
        'phone1', 
        'email', 
        'optinurl', 
        'channel', 
        'product', 
        'Leadsource', 
        'affiliateshortcode', 
        'offer_id', 
        'status', 
    ];
}
