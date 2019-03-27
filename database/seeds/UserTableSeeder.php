<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 15)->create();
        factory(App\User::class, 1 )->create([
            'username' => 'rahimi0151',
            'email' => 'rahimi0151@gmail.com',
            'twitter_handle' => 'rahimi0151',
            'instagram_handle' => 'rahimi0151',
            'telegram_handle' => 'rahimi0151',
            'website' => 'www.rahimi0151.ir',
        ]);
    }
}
