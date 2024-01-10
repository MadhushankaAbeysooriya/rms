<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'items';
    protected $fillable = [
        'name',
        'item_category_id',
        'ration_category_id',
        'measurement_id',
        'deleted_at'
    ];

    public function ItemCategory()
    {
        return $this->belongsTo(ItemCategory::class,'item_category_id','id');
    }

    public function Measurement()
    {
        return $this->belongsTo(Measurement::class,'measurement_id','id');
    }

    public function RationCategory()
    {
        return $this->belongsTo(RationCategory::class,'ration_category_id','id');
    }
}
