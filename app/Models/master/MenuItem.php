<?php

namespace App\Models\master;


use App\Models\master\Item;
use App\Models\master\Menu;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends Pivot
{
    use HasFactory;

    protected $table = 'menu_items';
    protected $fillable = [
        'menu_id',
        'item_id',
        'per_qty',
    ];

    public $timestamps = false;


    /**
     * Get the user that owns the MenuItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function selectmenu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    /**
     * Get the user that owns the MenuItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function selectitem()
    {
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }

}
