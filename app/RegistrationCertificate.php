<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationCertificate extends Model
{
    protected $fillable = [
        'id',
        'company_id',
        'wsc_id',
        'service_type',
        'comments',
        'service_status',
        'delivery_type',
        'delivery_charge',
        'document',
        'delivery_to',
        'fees',
        'created_id',
        'deleted'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
