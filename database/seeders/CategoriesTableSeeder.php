<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'uuid' => '97e1ec43-04f2-4702-a155-8bcd09a93f7f',
                'name' => 'Furniture',
                'is_active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-07-15 08:12:27',
                'updated_at' => '2025-07-15 08:12:27',
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => 'b1757e91-b8cf-45d5-ac5f-ad7c2b711a94',
                'name' => 'Computer Accessories',
                'is_active' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-07-15 08:24:13',
                'updated_at' => '2025-07-15 08:24:13',
            ),
        ));
        
        
    }
}