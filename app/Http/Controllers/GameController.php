<?php

namespace App\Http\Controllers;

use DB;
use Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UsersItems;

class GameController extends Controller
{
	
	public function index()
	{
		return view('game');
	}
	
	public function getData()
	{
		$user = Auth::user()->id;
		$items = DB::table('users_items')->where('user_id', '$user')->get();
		dd($items);
		$data = response()->json([
				"items" => $items,
		]);
		
		return $data;
	}
	
	public function postChanges()
	{
		$user = Auth::user();
		
		$user->money += request()->input('coins');
		$user->likes += request()->input('likes');
		$user->save();
	}
}
