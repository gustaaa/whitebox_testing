<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PasswordEditProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_password_edit_profile()
    {
        $response = $this->get('/password/$id');

        $response->assertStatus(302);
    }
}
