<?php

namespace App\Models\master;

use App\Models\master\LocationType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $fillable = [
        'name',
        'location_type_id'
    ];

    public function locationtype()
    {
        return $this->belongsTo(LocationType::class,'location_type_id','id');
    }
}
