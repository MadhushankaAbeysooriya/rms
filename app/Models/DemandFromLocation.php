<?php

namespace App\Models;

use App\Models\master\Item;
use App\Models\master\Location;
use App\Models\master\Supplier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DemandFromLocation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'demand_from_locations';
    protected $fillable = [
        'year',
        'demand_ref',
        'item_id',
        'supplier_id',
        'qty',
        'location_id',
        'request_date',
        'status',
        'deleted_at'
    ];


    public function item()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class,'location_id','id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }
}
