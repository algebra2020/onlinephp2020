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
        $s= new Student();
        
        //neka ima više od dva studenta
        $this->assertGreaterThan(2, $s::all()->count());
        
        // neka naziv mjesta stanovanja != null
        $this->assertNotEmpty($s::all()->find(1382)->mjestostanovanja()->get()->first()->naziv);
        
        //provjeri jesu li detalji studenta ispravni
        $this->assertEquals("Vlatka",   $s::find(1382)->imestud);
        $this->assertEquals("Relota",   $s::find(1382)->prezstud);
        $this->assertEquals("1382",     $s::find(1382)->mbrstud,);
        $this->assertEquals("vlatka.relota@algebra.hr", $s::find(1382)->email);
        $this->assertEquals("1985-06-11 00:00:00",      $s::find(1382)->datrodstud);
        $this->assertEquals("1106985330115",           $s::find(1382)->jmbgstud);
    }
}
