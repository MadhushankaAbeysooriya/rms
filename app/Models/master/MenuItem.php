<?php

namespace App\Models\master;

 
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
