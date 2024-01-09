<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RationCategory extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'ration_categories';
    protected $fillable = [
        'name',        
    ];
}
