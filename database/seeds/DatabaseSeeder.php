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
        // $this->call(UsersTableSeeder::class);
        $this->call(ZupanijaSeeder::class);
        $this->call(MjestoSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(NastavnikSeeder::class);
    }
}
