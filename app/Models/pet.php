<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function type()
    {
       return $this->belongsTo(Type::class,'type_id','id'); 
    }
}
