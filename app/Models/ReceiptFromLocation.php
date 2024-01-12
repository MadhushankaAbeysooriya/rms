<?php

namespace App\Models;

use App\Models\master\Item;
use App\Models\master\Location;
use App\Models\master\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReceiptFromLocation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'receipt_from_locations';
    protected $fillable = [
        'year',
        'demand_from_location_id',
        'receipt_type_id',
        'item_id',
        'location_id',
        'supplier_id',
        'qty',
        'receipt_date',
        'status',

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
