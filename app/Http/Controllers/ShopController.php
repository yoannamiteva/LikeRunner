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
	
		$shopItem  = new Item();
		$shopItem->id=$itemId;
		$shopItem->save();
	
		return redirect('/shop');
	
	}
	
	public function showShop(){
		$shop = Shop::where('user_id',Auth::user()->id)->first();
	
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
	
	public function update(Request $request, $id)
	{
		if (!$request->name or !$request->price or !$request->description or !$request->img_address) {
			return Response::json([
					'error' => [
							'message' => 'Please Provide name, price, description and image!'
					]
			], 422);
		}
		$item = Item::find($id);
		$item->name = $request->name;
		$item->price = $request->price;
		$item->description = $request->description;
		$item->img_address = $request->img_address;
		$item->save();
		return $item;
	}
}
