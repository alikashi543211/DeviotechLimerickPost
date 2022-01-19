<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountType extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function discountRates()
    {
    	return $this->hasMany('App\Models\DiscountRate','discount_types_id','id');
    }

}
