<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
	public function category()
	{
	    return $this->belongsTo(category::class);
	}

    public function subcategory()
	{
	    return $this->belongsTo(subcategory::class);
	}
}
