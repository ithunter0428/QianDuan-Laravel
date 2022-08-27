<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 21)->create();
        DB::table('users')->insert([
            'name' => 'Paek',
            'email' => "admin@gmail.com",
            'user_id' => "admin",
            'password' => Hash::make('password'),
            'grade' => 1,
            'mailbox_number' => "SP400",
            'cellphone_number' => "01093497611",
            'advance_payment' => 0,
            'last_visited_at' => date('Y-m-d H:i:s'),
            'is_admin' => 1,
            'remember_token' => Str::random(10),
        ]);
    }
}
