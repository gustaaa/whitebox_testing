<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PasswordEditUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_password_edit_user()
    {
        $response = $this->get('/user/$id');

        $response->assertStatus(302);
    }
}
