<?php

use Illuminate\Database\Seeder;

class EstateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('estates')->insert([
            "name" => "Brigade Cosmopolis",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-2.housingcdn.com/4f2250e8/36fa8e392425d46535d0aab6adb5cb17/v1/_l.jpg",
            "builder" => "Brigade Enterprises Ltd",
            "location" => '{"lat":12.962351,"lon":77.746145}',
            "price" => "86L",
            "amenities" =>'{"pool": 1,"gym": 0,"community_hall": 1,"play_area": 0,"power_backup" : 1,"lift": 1}',
            "color"=>"#946a38",
            "type"=>"3 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('estates')->insert([
            "name" => "Definer Hi-Life",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-2.housingcdn.com/4f2250e8/948c37b99f05251a99fb12d9c320e825/v1/_l.jpg",
            "builder" => "DeFINER Ventures",
            "location" => '{"lat":13.036118,"lon": 77.693408}',
            "price" => "33.24L",
            "amenities" =>'{"pool": 1,"gym": 1,"community_hall": 1,"play_area": 1,"power_backup" :1,"lift": 1}',
            "color"=>"#adaca9",
            "type"=>"2 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('estates')->insert([
            "name" => "Olympia",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-2.housingcdn.com/4f2250e8/30241a67c19fe285e50bbea6873d153d/v2/_l.jpg",
            "builder" => "by Gopalan Enterprises",
            "location" => '{"lat": 12.868923,"lon": 77.438126}',
            "price" => "34.48L",
            "amenities" =>'{"pool": 1,"gym": 0,"community_hall": 1,"play_area": 1,"power_backup": 1,"lift": 1}',
            "color"=>"#78906b",
            "type"=>"2 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('estates')->insert([
            "name" => "Vajra Pleasant",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-3.housingcdn.com/4f2250e8/a1d3cd90ef5eab5359f76e4d97fdb877/v2/_l.jpg",
            "builder" => "Vajra Constructions",
            "location" => '{"lat": 12.908972,"lon": 77.520385}',
            "price" => "40.8L",
            "amenities" =>'{"pool": 0,"gym": 1,"community_hall": 1,"play_area": 0,"power_backup": 1,"lift": 1}',
            "color"=>"#6B7477",
            "type"=>"3 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        // Data 6
        DB::table('estates')->insert([
            "name" => "Wind Song",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-2.housingcdn.com/4f2250e8/9546f07e7eeb869458db0403c3a2fa55/v2/_l.jpg",
            "builder" => "Vajra Constructions",
            "location" => '{"lat": 12.921701,"lon": 77.533434}',
            "price" => "81.47L",
            "amenities" =>'{"pool": 1,"gym": "1","community_hall": 0,"play_area": 1,"power_backup": 1,"lift": 1}',
            "color"=>"#6f716f",
            "type"=>"3 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        //Data 7
        DB::table('estates')->insert([
            "name" => "Brigade Exotica",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-3.housingcdn.com/4f2250e8/60a1573bdde6ef961ddbd0c3b54f1039/v1/_l.jpg",
            "builder" => "Brigade Enterprises Ltd",
            "location" => '{"lat": 13.043635,"lon": 77.745212}',
            "price" => "154L",
            "amenities" =>'{"pool": 0,"gym": 0,"community_hall": 1,"play_area": 0,"power_backup" : "1","lift": 1}',
            "color"=>"#b09d7f",
            "type"=>"3 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        // Data 8
        DB::table('estates')->insert([
            "name" => "The Presidential Tower",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-3.housingcdn.com/4f2250e8/c39eb2292c8ce9636bc05d08861d531d/v1/_l.jpg",
            "builder" => "Golden Gate Properties Ltd",
            "location" => '{"lat": 13.027811,"lon": 77.546348}',
            "price" => "243L",
            "amenities" =>null,
            "color"=>"#47597c",
            "type"=>"3 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('estates')->insert([
            "name" => "Sobha Life Style Legacy",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-2.housingcdn.com/4f2250e8/2b07021b658779a468454117b6ccc7f1/v1/_l.jpg",
            "builder" => "Sobha Developers",
            "location" => '{"lat": 13.241771,"lon": 77.713669}',
            "price" => "485L",
            "amenities" =>null,
            "color"=>"#373128",
            "type"=>"4BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('estates')->insert([
            "name" => "HM Tropical Tree",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is12.housingcdn.com/4f2250e8/1fe4f68d9f89613dcd2d37a2a08ce168/v1/_l.jpg",
            "builder" => "HM Group",
            "location" => '{"lat": 13.020837,"lon": 77.594751}',
            "price" => "324L",
            "amenities" =>null,
            "color"=>"#5d4f2c",
            "type"=>"4BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('estates')->insert([
            "name" => "Reflection Villas",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-3.housingcdn.com/4f2250e8/57407e744bc03d51fa1eae7ab3263eec/v3/_l.jpg",
            "builder" => "OLYMPIA GROUP",
            "location" => '{"lat": 12.775932, "lon": 80.248198}',
            "price" => "376L",
            "amenities" =>'{"pool": 1,"gym": 1,"community_hall": 1,"play_area": "1","power_backup": 1,"lift": 1}',
            "color"=>"#ac906e",
            "type"=>"3 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);


        DB::table('estates')->insert([
            "name" => "Shubh-Labh Homes",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-3.housingcdn.com/4f2250e8/57407e744bc03d51fa1eae7ab3263eec/v3/_l.jpg",
            "builder" => "Shubh - Labh Associates",
            "location" => '{"lat": 28.619979,"lon": 77.054649}',
            "price" => "33L",
            "amenities" =>'{"pool": 1,"gym": 0,"community_hall": 0,"play_area": 0,"power_backup" : 1,"lift": 0}',
            "color"=>"#ac906e",
            "type"=>"3 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        DB::table('estates')->insert([
            "name" => "Aarambh Apartment",
            "image" => "http://hackerearth.0x10.info/api/img?img=https://is1-3.housingcdn.com/4f2250e8/8ec8f928f1091d741e3301d229fc25b8/v1/_l.jpg",
            "builder" => "Mahalaxmi Group",
            "location" => '{"lat": 19.471762,"lon": 72.828659}',
            "price" => "13L",
            "amenities" =>null,
            "color"=>"#3b3f41",
            "type"=>"1 BHK",
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);





    }
}
