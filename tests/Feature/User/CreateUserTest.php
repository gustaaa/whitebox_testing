<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_user()
    {
        $response = $this->get('/user/create');

        $response->assertStatus(302);
    }
}
