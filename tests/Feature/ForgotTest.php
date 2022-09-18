<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ForgotTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_forgot_password()
    {
        $response = $this->get('/forgot-password');

        $response->assertStatus(200);
    }
}
