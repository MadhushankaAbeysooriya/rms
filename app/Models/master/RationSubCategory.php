<?php

namespace App\Models\master;

use App\Models\master\RationCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RationSubCategory extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'ration_sub_categories';
    protected $fillable = [
        'ration_category_id',
        'name',
    ];

    public function rationcategory()
    {
        return $this->belongsTo(RationCategory::class,'ration_category_id','id');
    }
}
