<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AmnestyService extends Model
{
    protected $fillable = [
        'id',
        'candidate_id',
        'company_id',
        'wsc_id',
        'service_type',
        'cpr',
        'amnesty_application',
        'comments',
        'service_status',
        'delivery_status',
        'delivery_charge',
        'fees',
        'delivery_to',
        'amnesty_pdf',
        'delivery_type',
        'created_id',
        'deleted'
    ];
}
