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
                'product_image1' => 'images/products/product_1.jpeg',
                'product_image2' => 'images/products/product_2.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 'available',
                'product_category' => 'Graphite',
                'product_brand' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone 13 Pro Max Silver - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1199.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_2.jpeg',
                'product_image2' => 'images/products/product_2.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 'available',
                'product_category' => 'Silver',
                'product_brand' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'product_title' => 'iPhone 13 Pro Graphite - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1099.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_3.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 'available',
                'product_category' => 'Graphite',
                'product_brand' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone 13 Pro Gold - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1099.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_4.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_2.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 'available',
                'product_category' => 'Gold',
                'product_brand' => 'Laptop',               
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone 12 Red - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '849.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_5.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_2.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 'available',
                'product_category' => 'Red',
                'product_brand' => 'Laptop',              
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone 12 Mini Purple - 128GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '649.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_6.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'product_brand' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '20.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_7.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'product_brand' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '2000.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_14.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'product_brand' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '20.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_9.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'product_brand' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'product_title' => 'iPhone Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '20.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_10.jpeg',
                'product_image2' => 'images/products/product_11.jpeg',
                'product_image3' => 'images/products/product_12.jpeg',
                'product_image4' => 'images/products/product_21.jpeg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'product_brand' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
