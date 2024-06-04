<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;
    protected $fillable = [
        'aircraft_name',
        'aircraft_code',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function flightHours()
    {
        return $this->hasMany(FlightHour::class);
    }
}
