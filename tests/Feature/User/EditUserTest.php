<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_user()
    {
        $response = $this->get('/user/$id/edit');

        $response->assertStatus(302);
    }
}
