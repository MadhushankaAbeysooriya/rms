<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApprovedUnitPrice extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'approved_unit_prices';
    protected $fillable = [
        'year',
        'quarter_id',
        'item_id',
        'brand_id',
        'price',
        'deleted_at'
    ];


    public function linkquarter()
    {
        return $this->belongsTo(Quarter::class, 'quarter_id', 'id');
    }

    public function linkitem(){
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }

    public function linkbrand(){
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

}
