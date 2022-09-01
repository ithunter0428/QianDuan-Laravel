<?php

use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_announcement')->insert([
            [
                "title" => "管理员测试测试",
                "content" => "這是示例文本",
                "creator" => "管理",
                "view_count" => 81,
                "created_at" => "2019-08-14 09:50:00",
            ],
            [
                "title" => "Arum 解决方案 2.0 版本诞生",
                "content" => "這是示例文本",
                "creator" => "管理",
                "view_count" => 59,
                "created_at" => "2019-07-25 13:04:00",
            ],
            [
                "title" => "测试",
                "content" => "這是示例文本",
                "creator" => "管理",
                "view_count" => 15,
                "created_at" => "2019-11-01 15:53:00",
            ],
            [
                "title" => "测试",
                "content" => "這是示例文本",
                "creator" => "管理",
                "view_count" => 6,
                "created_at" => "2019-10-02 16:13:00",
            ],
            [
                "title" => "管理员测试测试",
                "content" => "這是示例文本",
                "creator" => "管理",
                "view_count" => 81,
                "created_at" => "2019-08-14 09:50:00",
            ],
            [
                "title" => "测试",
                "content" => "這是示例文本",
                "creator" => "管理",
                "view_count" => 62,
                "created_at" => "2019-11-03 16:13:00",
            ],
            [
                "title" => "Arum 解决方案 2.0 版本诞生",
                "content" => "這是示例文本",
                "creator" => "管理",
                "view_count" => 33,
                "created_at" => "2020-02-25 13:04:00",
            ]
        ]);
    }
}
