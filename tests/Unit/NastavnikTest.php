<?php

// $ php artisan make:test NastavnikTest --unit

namespace Tests\Unit;

use Tests\TestCase;
use App\Nastavnik;

class NastavnikTest extends TestCase {

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testNastavnikModelExists() {
        $this->assertTrue(class_exists('App\Nastavnik'), "Ne postoji model student ");
    }

    public function testNastavnikModelRelations() {
        $this->assertTrue(method_exists('App\Nastavnik', 'orgjed'), "Ne postoji relacija na organizacijske jedinice ");
        $this->assertTrue(method_exists('App\Nastavnik', 'ispiti'), "Ne postoji relacija na ispite ");
        $this->assertTrue(method_exists('App\Nastavnik', 'mjesto'), "Ne postoji relacija na mjesto stanovanja ");
        $this->assertFalse(method_exists('App\Nastavnik', 'method_xyz'));
    }

    public function testNastavnikMjesto() {
        $n = Nastavnik::all()->first();
        $this->assertTrue($n->id > 0);
    }

}
