<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'quarters';
    protected $fillable = [
        'name',        
        'year',        
        'from_date',        
        'to_date',        
    ];
}
