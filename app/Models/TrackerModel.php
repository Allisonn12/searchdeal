<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackerModel extends Model
{
    protected $table = 'tracker';
    protected $fillable = [
        'firstname', 
    'lastname', 
    'phone1', 'email', 
    'product', 
    'leadsource', 
    'affiliateshortcode', 
    'channel', 
    'offer_id',
    'status'];
}
