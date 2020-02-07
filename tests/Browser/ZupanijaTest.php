<?php

namespace Tests\Browser;

use App\Zupanija;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ZupanijaTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testZupanijaCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/zupanijas/create')
                    ->assertSee('Unesi novu županiju')
                    ->type('naziv', 'NAJNAJNOVIJaaZupanija')
                    ->press('unesi')
                    ->assertSee('Uspješno dodana županija')
                    ->assertSee('NAJNAJNOVIJaaZupanija');
            $browser->pause(1500)
                ->screenshot('nova-zupanija-screenshot');
            
        });
    }
    public function testZupanijaDelete()
    {
        $this->browse(function (Browser $browser) {
            
         // Pronadji id od testne zupanije 
        $zup_id=Zupanija::where('naziv','NAJNAJNOVIJaaZupanija')->first()->id;           
            
            $browser->visit('/zupanijas')
                    ->assertSee('Kompletan popis svih županija')
                    ->press('#delete_zup_'.$zup_id)
                    ->assertDontSee('error')
                    ->assertSee('Županija NAJNAJNOVIJaaZupanija je obrisana!');
            $browser->pause(1500)
                ->screenshot('deleted-zupanija-screenshot');
            
        });
    }
}