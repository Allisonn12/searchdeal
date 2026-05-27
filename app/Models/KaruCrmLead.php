<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class KaruCrmLead extends Model
{
    use HasFactory;
  // Status constants — single source of truth shared with the service
  public const STATUS_PENDING   = 'pending';
  public const STATUS_SUCCESS   = 'success';
  public const STATUS_DUPLICATE = 'duplicate';
  public const STATUS_FAILED    = 'failed';

  protected $table = 'karu_crm_leads';

  protected $fillable = [
    'external_source_id',
    'name',
    'phone',
    'email',
    'mobile',
    'city',
    'street',
    'province',
    'suburb',
    'post_code',
    'remark_message',
    'meta',
    'karu_lead_id',
    'crm_response',
    'status',
  ];

  protected $casts = [
    'meta'         => 'array',
    'crm_response' => 'array',
  ];
}
