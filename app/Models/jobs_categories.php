<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class jobs_categories extends Model
{
 
    use HasFactory;
    protected $table="jobs_categories";
    protected $fillable=[
    'id', 'name','active','added_by' ,'updated_by','created_at','updated_at'];
    
    public function added(){
        return $this->belongsTo('\App\Models\User','added_by');
     }
     public function updatedby(){
        return $this->belongsTo('\App\Models\User','updated_by');
     }
}
