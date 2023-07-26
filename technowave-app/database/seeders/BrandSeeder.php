<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'brand_title' => 'Apple',
                'brand_description' => 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California. Apple is the worlds largest technology company by revenue, with US$394.3 billion in 2022 revenue. As of March 2023, Apple is the worlds biggest company by market capitalization.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_1.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_title' => 'HP',
                'brand_description' => 'Hewlett-Packard Company, American manufacturer of software and computer services and a major brand in the history of computers and computer-related products. The company split in 2015 into two companies: HP Inc. and Hewlett Packard Enterprise. Headquarters were in Palo Alto, California.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_2.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_title' => 'DELL',
                'brand_description' => 'Dell Technologies is one of the largest tech companies in the world, with over 165,000 employees across the globe. Founded by Michael Dell in 1984, the company focuses today on sales of personal computers, network servers, data storage solutions, and software.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_3.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_title' => 'ASUS',
                'brand_description' => 'ASUS is a Taiwan-based, multinational computer hardware and consumer electronics company that was established in 1989. Dedicated to creating products for todays and tomorrows smart life.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_4.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_title' => 'LENOVO',
                'brand_description' => 'The company develops, and markets IT-related products including devices and peripherals, personal computers, handheld devices, and servers and mainframes. Its products include gaming computers, smartphones, servers, laptops and ultrabooks, tablets, desktops, storage devices, and accessories.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_5.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_title' => 'ACER',
                'brand_description' => 'Acer Inc (Acer) is an information and communication technology company that develops, designs, markets, and exports IT products. The companys product portfolio comprises personal computers, projectors, tablet PCs, smartphones, wearables, smart devices, LCD monitors, servers, and ICT devices.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_6.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_title' => 'LOGITECH',
                'brand_description' => 'A Swiss company focused on innovation and quality, Logitech designs products and experiences that have an everyday place in peoples lives. For more than 40 years, we have expanded both our expertise in product design and our global reach. Our products focus on how customers connect and interact with the digital world.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_7.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_title' => 'RAZER',
                'brand_description' => 'Razer Inc (Razer) is involved in designing and manufacturing of gaming software and hardware peripherals. The companys products portfolio comprises gaming peripherals, including gaming mice, keyboards, audio devices, mouse mats and peripheral accessories.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_8.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_title' => 'JBL',
                'brand_description' => 'JBL is an American audio equipment manufacturer headquartered in Los Angeles, California, United States. JBL serves the customer home and professional market. The professional market includes studios, installed/tour/portable sound, cars, music production, DJ, cinema markets, etc.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_9.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'brand_title' => 'INTEL',
                'brand_description' => 'Intel is best known for developing the microprocessors found in most of the worlds personal computers. The multinational technology company is also the worlds largest manufacturer by revenue of semiconductor chips, a product used in most of the worlds electronic devices.',
                'brand_status' => 1,
                'brand_image1' => 'images/brand/brand_10.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
           
        ]);
    }
}
