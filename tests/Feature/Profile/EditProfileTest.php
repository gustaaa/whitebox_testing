<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_profile()
    {
        $response = $this->get('/profile/$id/edit');

        $response->assertStatus(302);
    }
}
