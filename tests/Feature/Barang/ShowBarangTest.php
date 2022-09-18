<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowBarangTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_barang()
    {
        $response = $this->get('/barang/$kode_barang');

        $response->assertStatus(302);
    }
}
