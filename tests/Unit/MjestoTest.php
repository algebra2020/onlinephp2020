<?php
//php artisan make:test MjestoTest --unit

namespace Tests\Unit;
use App\Mjesto;
use App\Zupanija;
use Tests\TestCase;

class MjestoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testMjestoModel()
    {
        $a = new Mjesto();
        $this->assertGreaterThan(200, $a::count());  // uvjeri se da postoji vise od 200 mjesta
        $this->assertEquals(1, $a::find(1)->id, 'usporedjujem dobiveni i zadani id');   
    }
    public function testMjestoZupanijaRelacija(){
        //Nađi mi županiju u kojoj nema niti jedno mjesto
        //$mjesto_id=Zupanija::doesnthave('mjestos')->get();  // može ovako -> vraća array
        
        // kreiraj probnu zupaniju koja nema niti jedno mjesto 
        $z= new Zupanija();
        $z->naziv="DummyZupanija";
        $z->save();
        
        // pokusaj pronaci zupaniju koja nema niti jedno povezano mjesto
        $zup_id=Zupanija::doesnthave('mjestos')->first()->id;  // 'mjestos' je ime relacija/metode u modelu Zupanija
        $prazna_zupanija=Zupanija::find($zup_id);
        
        // uvjeri se da je pronađena jednaka novonapravljenoj
        $this->assertEquals($z->naziv, $prazna_zupanija->naziv);
        
        // Obrisi pronadjenu
        $prazna_zupanija->delete();
        
        // Uvjeri se da je obrisana zupanija sa 0 mjesta
        $this->assertEquals(0,Zupanija::doesnthave('mjestos')->count()); 
    }
}
