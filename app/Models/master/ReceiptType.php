<?php

namespace App\Models\master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ReceiptType extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'receipt_types';
    protected $fillable = [
        'name',        
    ];

}
