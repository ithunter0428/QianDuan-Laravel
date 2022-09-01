<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AnnouncementSettingsSeeder::class,
            AnnouncementSeeder::class,
            ServiceInquirySeeder::class,
            EventSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
