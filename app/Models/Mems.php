<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mems extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function images()
	{
		return $this->hasMany(Image::class,'meme_id','id');
	}

	public function mems_images()
	{
		return $this->hasMany(Image::class,'meme_id','id');
	}
	
	public function verses()
	{
		return $this->hasMany(Verse::class,'meme_id','id');
	}

	public function provided_verses()
	{
		return $this->hasMany(ProvidedVerse::class,'meme_id','id');
	}

	public function mem_verses()
	{
		return $this->hasMany(MemVerse::class,'meme_id','id');
	}
}
