<?php

namespace Tests\Unit;
//use PHPUnit\Framework\TestCase;  //connection() greska ?


use App\Student;
use App\Zupanija;
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
    
    
    /**
     * Može i ovako ako ne želimo metodu nazivati sa početnim test*
     * @test
     */
    public function probnaMetodaSAnotacijom() {
        $s= new Student();
        $brzup=$s::all()->random(1)->first()->mjestostanovanja()->get()->first()->zupanija_id;
        $zup=Zupanija::find($brzup)->naziv;
        $this->assertNotSame('', $zup);  // je li vrijednost Misouri ili Pensilvaanilija
        $this->assertNotEmpty($zup, 'Greska, zupanija ime NULL vrijednost imena');
        
        
        // (1) nadji zupaniju sa id=x
        // (2) izlistaj sva mjesta te zupanije
        // (3) pronadji mjesto y
        // (4) izlistaj sve studente
        // (5) uvjeri se da je u listi student imena z
     $s=Student::all()->random(1)->first();
     /*
=> App\Student {#3577
     mbrstud: 1325,
     imestud: "Martina",
     prezstud: "Simon",
     pbrrod: 43217,
     pbrstan: 44631,
     datrodstud: "1984-02-03 00:00:00",
     jmbgstud: "0302984383304",
     slikastud: 0,
     email: "martina.simon@algebra.hr",
     created_at: null,
     updated_at: null,
   }*/
  $zupid=$s->mjestostanovanja()->get()->first()->zupanija_id;
  $mjestoid=$s->mjestostanovanja()->get()->first()->id;
  $studid=$s->mbrstud;
$stud_prezime=$s->prezstud;
//=> "Simon"
$prezime_studenta=Zupanija::find($zupid)->mjestos()->find($mjestoid)->students_stan()->get()->find($studid)->prezstud;
//=> "Simon"
//
// kompletan test od studenta preko mjesta do zupanije i natrag
// od zupanije preko mjesta do studenta
$this->assertSame($stud_prezime, $prezime_studenta); 
echo "test stud-mjesto-zupanija: ".$stud_prezime." = ".$prezime_studenta;

        
        
    }
}
