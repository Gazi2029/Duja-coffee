<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiPingTest extends TestCase
{
    public function test_api_ping_returns_a_lightweight_health_response(): void
    {
        $response = $this->getJson('/api/ping');

        $response
            ->assertOk()
            ->assertJson(['ok' => true])
            ->assertJsonStructure(['ok', 'ts']);

        $this->assertIsInt($response->json('ts'));
    }
}
