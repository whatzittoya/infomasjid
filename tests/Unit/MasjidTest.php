<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class MasjidTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->actingAs('POST', '/masjid', ['name' => 'Sally']);

        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true,
            ]);
    }
}
