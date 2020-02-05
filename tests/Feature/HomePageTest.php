<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    /**
     * Algebra Online PHP 2020
     */
    public function testHomeHeadingText()
    {
            $response = $this->get('/')
                    ->assertSee('Algebra Online PHP 2020')
                    //->assertDontSee('laracast')  // ipak neka ostane laracast
                    ->assertDontSee('Error');
    }    
    
}
