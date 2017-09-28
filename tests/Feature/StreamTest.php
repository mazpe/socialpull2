<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StreamTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStreamEndpointTest()
    {
        $response = $this->get('/stream');

        $response->assertStatus(200);
    }
}
