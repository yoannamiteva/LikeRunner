<?php

namespace App\Http\Controllers;

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
	
	public function addItem ($item)
	{
		$shopItem  = new Item();
		$shopItem->id = $item->id;
		$shopItem->save();
	
		return redirect('/shop');
	}
	
	public function showShop()
	{
		//$user = Auth::user;
		$items = Item::all();
		return view('shop' , compact('items'));
	}
	
	public function removeItem($id)
	{
		Item::destroy($id);
		return redirect('/shop');
	}
	
	public function buyItem($id)
	{
		$user = Auth::user();
		$item = Item::find($id);
		if($user->money >= $item->price)
		{
			$user
			->items()
			->attach($item->id);
			$user->money -= $item->price ;
		}
		
		return back();
	}
	
	
}