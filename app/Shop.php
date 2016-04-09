<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	public function shopItems()
    {
        return $this->hasMany('App\Item');
    }
}
