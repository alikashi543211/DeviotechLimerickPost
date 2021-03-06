<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function meme()
    {
        return $this->belongsto(Mems::class,'meme_id','id');
    }
}
