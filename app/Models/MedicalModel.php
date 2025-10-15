<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalModel extends Model
{
    protected $table = 'medical';
    protected $fillable = [
        'firstname', 
        'lastname', 
        'phone1', 
        'email', 
        'offer_id',
        'status'];
}
