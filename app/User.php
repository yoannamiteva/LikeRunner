<?php

namespace App;

use App\Item;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'likes', 'facebook_id', 'money'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function showUserItems($id)
    {
    	$user = User::findOrFail($id);
    	$items = $user->items()->get();
    	return $items;
    }
    
    
    
}
