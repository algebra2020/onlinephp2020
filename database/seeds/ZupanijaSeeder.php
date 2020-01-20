<?php

use Illuminate\Database\Seeder;

class ZupanijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Zupanija::class, 21)->create();
    }
}
