<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DebtModel extends Model
{
    protected $table = 'debt';
    protected $fillable = ['firstname', 'lastname', 
    'phone1', 'email', 
    'debt_greater_than_30_000', 
    'income_greater_than_10_000', 
    'underdebtreview', 'employment', 
    'offer_id','status'];
}
