<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        	for($i=0;$i<10;$i++){
        	 Product::create([
        	'title'=>$faker->sentence(3),
        	'slug'=>$faker->slug,
        	'subtitle'=>$faker->sentence(4),
        	'price'=>$faker->numberBetween(20,500),
        	'descrption'=>$faker->text,
        	'image'=>'https://via.placeholder.com/200x250',
        		]);
        	}
        }
       
    
}
