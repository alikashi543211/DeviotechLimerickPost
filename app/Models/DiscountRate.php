<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountRate extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function discountType()
    {
        return $this->belongsto('App\Models\DiscountType','discount_types_id','id');
    }
}
