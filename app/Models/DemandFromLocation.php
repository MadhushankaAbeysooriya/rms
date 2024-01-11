<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandFromLocation extends Model
{
    use HasFactory;
    protected $table = 'demand_from_locations';
    protected $fillable = [
        'year',
        'item_id',
        'location_id',
        'qty',
        'request_date',
        'status',
    ];
}
