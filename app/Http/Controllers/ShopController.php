<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function addItem ($itemId){
	
		$shop = Shop::where('user_id',Auth::user()->id)->first();
	
		if(!$shop){
			$shop =  new Shop();
			$shop->user_id=Auth::user()->id;
			$shop->save();
		}
	
		$shopItem  = new Item();
		$shopItem->item_id=$itemId;
		$shopItem->shop_id= $cart->id;
		$shopItem->save();
	
		return redirect('/shop');
	
	}
	
	public function showShop(){
		$shop = Shop::where('user_id',Auth::user()->id)->first();
	
		if(!$shop){
			$shop =  new Shop();
			$shop->user_id=Auth::user()->id;
			$shop->save();
		}
	
		$items = $shop->shopItems;
		$total=0;
		foreach($items as $item){
			$total+=$item->item->price;
		}
	
		return view('shop',['items'=>$items,'total'=>$total]);
	}
	
	public function removeItem($id){
	
		Item::destroy($id);
		return redirect('/shop');
	}
}
