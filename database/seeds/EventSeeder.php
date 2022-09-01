<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_event')->insert([
            [
                "title" => "我對這項服務有疑問",
                "content" => "我對這項服務有疑問",
                "creator" => "管理",
                "view_count" => 81,
                "created_at" => "2019-08-14 09:50:00",
            ],
            [
                "title" => "我對這項服務有疑問",
                "content" => "我對這項服務有疑問",
                "creator" => "管理",
                "view_count" => 59,
                "created_at" => "2019-07-25 13:04:00",
            ]
        ]);
    }
}
