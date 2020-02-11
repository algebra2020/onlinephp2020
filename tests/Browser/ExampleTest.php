<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testHomepage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Algebra Online PHP 2020');
        });
    }
        public function testHomepageUrl()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertUrlIs('http://localhost:8000/');
        });
    }
        public function testHomepagePath()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertPathIs('http://localhost:8000/');;
        });
    }    
}
