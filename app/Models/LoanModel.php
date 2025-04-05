<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanModel extends Model
{
    protected $table = 'loans';
    protected $fillable = [
        'firstname', 
        'lastname', 
        'phone1', 
        'email', 
        'title', 
        'loanamount', 
        'idnumber',
        'underdebtreview', 
        'status'];
}
