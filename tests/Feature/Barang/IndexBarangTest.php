<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexBarangTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_index_barang()
    {
        $response = $this->get('/barang');

        $response->assertStatus(302);
    }
}
