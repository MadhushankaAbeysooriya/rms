<?php

namespace App\Models;

use App\Models\master\Item;
use App\Models\master\ReceiptType;
use App\Models\ReceiptFromLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReceiptFromLocationItem extends Model
{
    use HasFactory;

    protected $table = 'receipt_from_location_items';
    protected $fillable = [
        'item_id',
        'qty',
        'receipt_from_location_id',
        'brand_id',
        'receipt_type_id',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }

    public function receiptfromlocation()
    {
        return $this->belongsTo(ReceiptFromLocation::class,'receipt_from_location_id','id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function receipttype()
    {
        return $this->belongsTo(ReceiptType::class,'receipt_type_id','id');
    }
}
