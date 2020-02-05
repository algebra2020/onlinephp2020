<?php
//php artisan make:test ZupanijaTest --unit
namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class ZupanijaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBrojZupanijaJe21()
    {
         $broj_zupanija= \App\Zupanija::all()->count();
//=> 21
        $this->assertEquals(21, $broj_zupanija,'Broj zupanija MORA biti 21');
    }
}
