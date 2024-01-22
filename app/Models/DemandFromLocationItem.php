<?php

namespace App\Models;

use App\Models\master\Item;
use App\Models\master\Brand;
use App\Models\master\Supplier;
use App\Models\DemandFromLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemandFromLocationItem extends Model
{
    use HasFactory;

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

    public function demandfromlocation()
    {
        return $this->belongsTo(DemandFromLocation::class,'demand_from_location_id','id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

}
