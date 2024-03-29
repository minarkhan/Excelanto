<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsuranceService extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'service_type',
        'insurance_number',
        'insurance_card',
        'comments',
        'service_status',
        'created_id',
        'deleted'
    ];
}
