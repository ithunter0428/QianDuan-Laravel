<?php

use Illuminate\Database\Seeder;

class AnnouncementSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_announcement_settings')->insert([
            [
                'board_name' => '1:1咨询',
                'type' => '1:1查询（我自己的帖子）',
                'use_password' => false,
                'use_title' => true,
                'use_state' => true,
                'write_permission' => true,
                'view_all' => false,
                'comment_permission' => true,
                'page_count' => 10,
                'notification_count' => 5,
                'is_using' => true,
            ],
            [
                'board_name' => '通知',
                'type' => '普通的',
                'use_password' => false,
                'use_title' => false,
                'use_state' => false,
                'write_permission' => false,
                'view_all' => true,
                'comment_permission' => false,
                'page_count' => 10,
                'notification_count' => 5,
                'is_using' => true,
            ],
            [
                'board_name' => '服务查询/建议',
                'type' => '1:1查询（我自己的帖子）',
                'use_password' => true,
                'use_title' => false,
                'use_state' => false,
                'write_permission' => true,
                'view_all' => false,
                'comment_permission' => false,
                'page_count' => 10,
                'notification_count' => 5,
                'is_using' => true,
            ]
            ,
            [
                'board_name' => '活动',
                'type' => '缩略图',
                'use_password' => false,
                'use_title' => false,
                'use_state' => false,
                'write_permission' => false,
                'view_all' => false,
                'comment_permission' => false,
                'page_count' => 10,
                'notification_count' => 0,
                'is_using' => true,
            ],
            [
                'board_name' => '评论',
                'type' => '审查',
                'use_password' => false,
                'use_title' => false,
                'use_state' => false,
                'write_permission' => true,
                'view_all' => false,
                'comment_permission' => true,
                'page_count' => 16,
                'notification_count' => 5,
                'is_using' => true,
            ],
            [
                'board_name' => '常见问题',
                'type' => '常问问题',
                'use_password' => false,
                'use_title' => true,
                'use_state' => false,
                'write_permission' => false,
                'view_all' => true,
                'comment_permission' => false,
                'page_count' => 10,
                'notification_count' => 0,
                'is_using' => true,
            ]
        ]);
    }
}
