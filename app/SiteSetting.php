<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'status',
        'sitename',
        'adminemail', 
        'terms'
    ];
}
