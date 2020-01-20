<?php

use Illuminate\Database\Seeder;

class MjestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mjesto::class, 274)->create();
    }
}
