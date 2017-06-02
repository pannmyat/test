<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\product;

class subcategory extends Model
{
    public function products()
	{
	    return $this->hasMany(product::class);
	}  
}
