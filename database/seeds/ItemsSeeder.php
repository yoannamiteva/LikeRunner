<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('items')->insert([
	        [
	        		'name' => 'Magnet',
	        		'description' => 'You can get more likes!',
	        		'price' => 15,
	        		'img_address' => 'files/magnet.png'
	        ],
	        [
	        		'name' => 'Health',
	        		'description' => 'You have one more life!',
	        		'price' => 20,
	        		'img_address' => 'files/hearth.png'
	        ],
	        [
	        		'name' => 'Energy',
	        		'description' => 'You can run faster and get more likes for short time!',
	        		'price' => 30,
	        		'img_address' => 'files/energy.png'
	        ],
	    	[
		    		'name' => 'Double coins',
		    		'description' => 'You can get two coins by getting one!',
		    		'price' => 25,
		    		'img_address' => 'files/doublecoins.png'
	    	]
	    		
	        ]);
    }
}
