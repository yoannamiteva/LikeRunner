<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class TopScoreController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$counter = 1;
		$users = DB::table('users')
					->orderBy('likes' , 'DESC')
					->paginate(10);
					
		
		$auth = Auth::user();
		return view('top100' , compact('users' , 'counter' , 'auth'));
	}
	
}
