<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersItems extends Model
{
	protected $fillable = [
			'user_id' , 'item_id'
	];
	
    public function user()
    {
    	return $this->hasOne(\App\User::class);
    }
    
    public function item()
    {
    	return $this->hasOne(\App\Item::class);
    }
}
