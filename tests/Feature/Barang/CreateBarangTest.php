<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateBarangTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_barang()
    {
        $response = $this->get('/barang/create');

        $response->assertStatus(302);
    }
}
