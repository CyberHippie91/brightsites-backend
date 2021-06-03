<?php

namespace Tests\Feature;

use Database\Seeders;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->seed();


        $response->assertStatus(200);
    }

    public function test_constraints() {
        $this->seed(;)
    }
}
