<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionDonation extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function types()
    {
        return $this->belongsTo(Type::class,'type_id','id');
    }
    public function breeds()
    {
        return $this->belongsTo(Breed::class,'breed_id','id');
    }
}
