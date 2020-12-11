<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        \DB::table('admins')->insert([
           'name' => 'Nguyen Duc Huy',
            'email' => 'alienvictor2000@gmail.com',
            'password' => bcrypt('duchuy2000')
        ]);
    }
}
