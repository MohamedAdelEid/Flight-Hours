<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_name', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function crews(){
        return $this->hasMany(Crew::class);
    }
}
