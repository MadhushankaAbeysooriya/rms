<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'suppliers';
    protected $fillable = [
        'name',        
        'primary_contact',        
        'secondary_contact',        
        'address',        
        'reg_no',        
        'vat_no',        
        'status',        
    ];

}
