<?php

namespace App\Http\Controllers;

use App\UsersItems;
use Auth;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Requests;

class ShopController extends Controller
{
public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function addItem($item)
	{
		$shopItem  = new Item();
		$shopItem->id = $item->id;
		$shopItem->save();
		
		
		return redirect('/shop');
	}
	
	public function showShop()
	{

		$auth = Auth::user();
		$items = Item::all();
		return view('shop' , compact('items' , 'auth'));
	}
	public function removeItem($id)
	{
		$item = Item::find($id);
		$user = Auth::user();
		
		$user->items()->detach($id);
		$user->money += $item->price;
		
		$user->save();
		return redirect('/shop');
	}
	
	public function buyItem($id)
	{
		$user = Auth::user();
		$item = Item::find($id);
	
		if($user->money >= $item->price)
		{
			$user->items()->attach($id);
			$user->money -= $item->price;
			$user->save();
		}
		
		
		
		return back();
	}
	
	
}