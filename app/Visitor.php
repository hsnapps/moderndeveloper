<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subscibed',
        'ip',
    ];

    protected $casts = [
        'subscibed' => 'boolean',
    ];
}
