<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlternativeItem extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'alternative_items';
    protected $fillable = [
        'item_id',
        'alternative_item_id',
        'deleted_at'
    ];

    public function Item()
    {
        return $this->belongsTo(Item::class,'alternative_item_id','id');
    }
}
