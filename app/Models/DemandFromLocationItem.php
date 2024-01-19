<?php

namespace App\Models;

use App\Models\master\Item;
use App\Models\master\Brand;
use App\Models\master\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemandFromLocationItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'demand_from_location_items';
    protected $fillable = [
        'item_id',
        'qty',
        'demand_from_location_id',
        'brand_id',
    ];


    public function item()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
