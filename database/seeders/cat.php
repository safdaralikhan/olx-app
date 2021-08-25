<?php

namespace Database\Seeders;
use Db;
use Illuminate\Database\Seeder;

class cat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')
        ->insert(
            ['id' => 1,'cat_name' => 'Mobile'],
            ['id' => 2,'cat_name' => 'Vehicles'],
            ['id' => 3,'cat_name' => 'Property for Sale'],
            ['id' => 4,'cat_name' => 'Property for Rent'],
            ['id' => 5,'cat_name' => 'Electronics & Home Appliances'],
            ['id' => 6,'cat_name' => 'Bikes'],
            ['id' => 7,'cat_name' => 'Business, Industrial & Agriculture'],
            ['id' => 8,'cat_name' => 'Services'],
            ['id' => 9,'cat_name' => 'Jobs'],
            ['id' => 10,'cat_name' => 'Animals'],
            ['id' => 11,'cat_name' => 'Furniture & Home Decor'],
            ['id' => 12,'cat_name' => 'Fashion & Beauty'],
            ['id' => 13,'cat_name' => 'Books, Sports & Hobbies'],
            ['id' => 14,'cat_name' => 'Kids'],    
        );
    }
}
