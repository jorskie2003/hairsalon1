<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
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
    protected $casts = [
        'appointment_date' => 'datetime',
    ];
}