<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    protected $fillable = [
        'loan_type',
        'lender',
        'interest',
        'admin_fee',
        'minimum_amount',
        'maximum_amount',
        'salaried',
        'salaried_duration',
        'security',
        'security_type',
        'minimum_duration',
        'maximum_duration',
        'application_link',
        'deleted'
    ];

}
