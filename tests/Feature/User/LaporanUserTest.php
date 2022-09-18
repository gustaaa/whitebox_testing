<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LaporanUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_laporan_user()
    {
        $response = $this->get('/laporan/user');

        $response->assertStatus(302);
    }
}
