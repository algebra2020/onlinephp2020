<?php
//php artisan make:test MjestoTest --unit

namespace Tests\Unit;
use App\Mjesto;
use Tests\TestCase;

class MjestoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $a = new Mjesto();
        $this->assertGreaterThan(200, $a::count());
    }
}
