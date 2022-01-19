<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function acknowledge()
    {
        return $this->belongsto(Acknowledge::class,'acknowledge_id','id');
    }
    public function meme()
    {
        return $this->belongsto(Mems::class,'meme_id','id');
    }
}
