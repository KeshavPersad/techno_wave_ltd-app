<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_title' => 'iPhone 13 Pro Max Graphite - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1199.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-1.jpg',
                'product_image2' => 'images/products/iphone1-2.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Graphite',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone 13 Pro Max Silver - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1199.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-1.jpg',
                'product_image2' => 'images/products/iphone1-2.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Silver',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'product_title' => 'iPhone 13 Pro Graphite - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1099.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-2.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Graphite',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone 13 Pro Gold - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1099.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-3.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-2.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Gold',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone 12 Red - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '849.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-3.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-2.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Red',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone 12 Mini Purple - 128GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '649.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-2.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '20.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-2.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
