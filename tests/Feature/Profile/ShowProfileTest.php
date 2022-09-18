<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_profile()
    {
        $response = $this->get('/profile/$id');

        $response->assertStatus(302);
    }
}
