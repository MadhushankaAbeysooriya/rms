<?php

namespace App\Models\master;

use App\Models\master\Measurement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    public function measurement()
    {
        return $this->belongsTo(Measurement::class,'measurement_id','id');
    }
}
