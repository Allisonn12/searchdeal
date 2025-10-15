<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LifeModel extends Model
{
    protected $table = 'life';
    protected $fillable = [
        'firstname', 
        'lastname', 
        'phone1', 
        'email',
        'status', 
    ];
}
