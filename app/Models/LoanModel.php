<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class LoanModel extends Model
{
    use HasFactory;
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
