<?php

namespace App\Models;

use App\Models\master\Item;
use App\Models\master\Brand;
use App\Models\master\Location;
use App\Models\master\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnnualDemand extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'annual_demands';
    protected $fillable = [
        'year',
        'item_id',
        'location_id',
        'qty',
        'supplier_id',
        'avl_qty',
        'brand_id',
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

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
