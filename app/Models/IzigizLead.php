<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IzigizLead extends Model
{
  protected $table = 'izigiz_leads';

  // Explicit status constants prevent magic strings scattered across the codebase.
  public const STATUS_PENDING = 'pending';
  public const STATUS_SUCCESS = 'success';
  public const STATUS_FAILED  = 'failed';

  protected $fillable = [
    'campaign_code',
    'firstname',
    'lastname',
    'phone',
    'email',
    'date_of_birth',
    'car_make',
    'car_model',
    'car_year',
    'car_usage',
    'preferred_call_time',
    'status',
    'api_response',
  ];

  protected $casts = [
    'date_of_birth' => 'date',
    'api_response'  => 'array',
  ];
}
