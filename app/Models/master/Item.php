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
        return $this->belongsTo(ItemCategory::class,'id','item_category_id');
    }

    public function Measurement()
    {
        return $this->belongsTo(Measurement::class,'id','measurement_id');
    }
}
