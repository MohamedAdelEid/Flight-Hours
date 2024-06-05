<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = [
        'job_name','type_id','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function crews(){
        return $this->hasMany(Crew::class);
    }
    public function job_type(){
        return $this->belongsTo(JobType::class,'type_id');
    }
}
