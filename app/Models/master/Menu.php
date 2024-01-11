<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'menus';
    protected $fillable = [
        'name',        
        'ration_date_id',        
        'ration_type_id',        
        'ration_time_id',        
        'year',        
    ];


    /**
     * Get the user that owns the Menu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rationdate()
    {
        return $this->belongsTo(RationDate::class, 'ration_date_id', 'id');
    }

    /**
     * Get the user that owns the Menu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rationtype()
    {
        return $this->belongsTo(RationType::class, 'ration_type_id', 'id');
    }

    /**
     * Get the user that owns the Menu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rationtime()
    {
        return $this->belongsTo(RationTime::class, 'ration_time_id', 'id');
    }

    /**
     * Get all of the comments for the Menu
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menuitem()
    {
        return $this->hasMany(MenuItem::class, 'menu_id', 'id');
    }

}
