<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'name',
        'email',
        'hairstylist',
        'appointment_date',
    ];

    protected $dates = [
        'appointment_date',
    ];
}