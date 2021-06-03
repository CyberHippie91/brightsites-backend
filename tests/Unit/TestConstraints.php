<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TestConstraints extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_constraints()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'sally@example.com',
        ]);
    }
}
