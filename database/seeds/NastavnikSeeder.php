<?php
//$ php artisan db:seed --class=NastavnikSeeder
use Illuminate\Database\Seeder;

class NastavnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nastavnik::class, 150)->create();
    }
}
