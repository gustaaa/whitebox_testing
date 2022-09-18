<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_index_user()
    {
        $response = $this->get('/user');

        $response->assertStatus(302);
    }
}
