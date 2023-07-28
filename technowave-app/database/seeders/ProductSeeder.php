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
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'Laptop 13 Pro Max Graphite - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '1199.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_1.jpeg',
                'product_image2' => 'images/products/product_2.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'Desktop Pro Max - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '999.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_2.jpeg',
                'product_image2' => 'images/products/product_19.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'Gaming PC - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '1099.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_3.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'Monitors 27" Pro Gold',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '1099.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_4.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_2.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'iPhone 12 Tech Accessories',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '849.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_5.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_2.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => '12" Speakers Mini Base',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '649.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_6.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'Keyboard Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '20.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_7.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'Mouse Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '2000.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_14.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'PC Part Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '20.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_9.jpeg',
                'product_image2' => 'images/products/product_1.jpeg',
                'product_image3' => 'images/products/product_3.jpeg',
                'product_image4' => 'images/products/product_4.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'Mouse and Keyboard Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '20.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_10.jpeg',
                'product_image2' => 'images/products/product_11.jpeg',
                'product_image3' => 'images/products/product_12.jpeg',
                'product_image4' => 'images/products/product_21.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'AMD Ryzen',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '1200.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_16.jpeg',
                'product_image2' => 'images/products/product_11.jpeg',
                'product_image3' => 'images/products/product_12.jpeg',
                'product_image4' => 'images/products/product_21.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'Sony 60" Monitor',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '425.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_16.jpeg',
                'product_image2' => 'images/products/product_11.jpeg',
                'product_image3' => 'images/products/product_12.jpeg',
                'product_image4' => 'images/products/product_21.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'brand_id' => 1,
                'product_title' => 'Dual 6" Desk Speakers ',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_add_info' => 'Something',
                'product_price' => '339.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/product_16.jpeg',
                'product_image2' => 'images/products/product_11.jpeg',
                'product_image3' => 'images/products/product_12.jpeg',
                'product_image4' => 'images/products/product_21.jpeg',
                'product_status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
