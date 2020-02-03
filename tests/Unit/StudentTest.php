<?php

namespace Tests\Unit;

use App\Student;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testImaLiStudenata()
    {
        /*
$s= new Student;
$s::all()->find(1382)->mjestostanovanja()->get()
App\Mjesto {#3750
         id: 112,
         pbr: 40393,
         naziv: "West Oma",
         zupanija_id: 3,
         created_at: "2020-02-03 18:22:28",
         updated_at: "2020-02-03 18:22:28",
       },
         */
        $s= new Student();
        //$dsd=$s::all()->find(1382)->mjestostanovanja()->get()->first()->naziv;
        $this->assertTrue(true);
       // $mjestoStanovanja=$s::all()->find(1382)->mjestostanovanja()->get()->first()->naziv;
        $this->assertGreaterThan(2, $s::all()->count());
        //$this->assertNotEmpty($mjestoStanovanja);
    }
}
